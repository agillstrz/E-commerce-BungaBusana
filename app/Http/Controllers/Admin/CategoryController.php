<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Exists;

class CategoryController extends Controller
{
   public function index(){
       $category = Category::all();
       return view('dashboard.category.index', compact('category'));
   }
   public function add(){
    return view('dashboard.category.add');
    }

    public function insert(Request $request){
       
    $category = new Category();
    if ($request->hasFile('image')) 
    {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/category',$filename);
        $category->image=$filename;
    }

    $category->name = $request->input('name');
    $category->slug = $request->input('slug');
    $category->save();
    return redirect('/categories')->with('status','Kategori berhasil ditambahkan');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('dashboard.category.edit', compact('category'));
    }

    public function update(Request $request, $id){

        $category = Category::find($id);
        if ($request->hasFile('image')) 
        {
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path)) {
                
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category',$filename);
            $category->image=$filename;
         
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->update();
        return redirect('/categories')->with('status','Kategori berhasil diperbarui');
    }

    public function destroy($id){
        $category = Category::find($id);
        if ($category->image) 
        {  
            
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path)) {
                
                File::delete($path);
            }

        }
        $category->delete();
        return redirect('categories')->with('status','Produk berhasil dihapus');
    }

}