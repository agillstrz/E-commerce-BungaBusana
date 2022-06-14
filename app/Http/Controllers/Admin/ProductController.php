<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $produk = Product::all();
        return view('dashboard.produk.index', compact('produk'));
    }

    public function add(){
        
        $category = Category::all();
        return view('dashboard.produk.add', compact('category'));
    }

    public function insert(Request $request){
        $produk = new Product();
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/produk/',$filename);
            $produk->image=$filename;
            
        }
        $produk->cate_id = $request->input('cate_id');
        $produk->name = $request->input('name');
        $produk->slug = $request->input('slug');
        $produk->small_deskripsi = $request->input('small_deskripsi');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga_asli = $request->input('harga_asli');
        $produk->harga_jual = $request->input('harga_jual'); 
        $produk->qty = $request->input('jumlah');
        $produk->status = $request->input('status')== TRUE ? '1':'0';;
        $produk->trending = $request->input('trending')== TRUE ? '1':'0';;
        $produk->save();
       return redirect('produk')->with('status','produk berhasil ditambahkan');
  
    }

    public function edit($id){
        $produk = Product::find($id);
        return view('dashboard.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id){
        $produk = Product::find($id);

        if ($request->hasFile('image')) 
        {
            $path = 'assets/uploads/produk/'.$produk->image;

            if(File::exists($path)) {
                
                File::delete($path);
        }
        $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/produk/',$filename);
            $produk->image=$filename;
    }
        $produk->name = $request->input('name');
        $produk->slug = $request->input('slug');
        $produk->small_deskripsi = $request->input('small_deskripsi');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga_asli = $request->input('harga_asli');
        $produk->harga_jual = $request->input('harga_jual');
        $produk->qty = $request->input('jumlah');
        $produk->status = $request->input('status') == TRUE ? '1':'0';
        $produk->trending = $request->input('trending') == TRUE ? '1':'0';
        $produk->update();
        return redirect('produk')->with('status','produk berhasil diupdate');
    
    }

    public function destroy($id){
        $produk = Product::find($id);
        $path = 'assets/uploads/produk/'.$produk->image;
        if(File::exists($path)) {
            
            File::delete($path);
        }
        $produk->delete();
        return redirect('produk')->with('status','produk berhasil dihapus');
    }
}