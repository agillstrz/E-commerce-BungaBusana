<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class FrontendController extends Controller
{

    public function index(){
        $produkunggulan = Product::where('trending','1')->where('status','1')->take(15)->get();
        $semuaproduk = Product::where('status','1')->take(4)->latest()->get();
        $kategori = Category::all();
        return view('frontend.home', compact('produkunggulan','kategori','semuaproduk'));
    }

    public function semuaproduk(){
     if(request('cari')){
      $semuaproduk = Product::where('status','1')->where('name','LIKE','%'.request('cari').'%')->paginate(20);
     } else{
     $semuaproduk = Product::where('status','1')->paginate(20)->withQueryString();
     }
        
        return view('frontend.produk.semuaproduk', compact('semuaproduk'));
    }
    public function produkpria(){
        $produkpria = Product::where('status','1')->where('gender','1')->orWhere('gender','0')->paginate(20);
        $kategori = Category::all();
        return view('frontend.produk.produkpria', compact('produkpria'));
    }
    public function produkwanita(){
        $produkwanita = Product::where('status','1')->where('gender','2')->orWhere('gender','0')->paginate(20);
        $kategori = Category::all();
        return view('frontend.produk.produkwanita', compact('produkwanita'));
    }

    public function tampilankategori($slug){
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $produk = Product::where('cate_id',$category->id)->where('status','1')->get();
            return view('frontend.kategori', compact('category','produk'));
        }
        else {
            return redirect('/')->with('status','slug tidak sama');
        }
    
        
    }
   
    public function tampilanproduk($cate_slug , $prod_slug)
    {
        
        if (Category::where('slug', $cate_slug)->exists())
        {
            if (Product::where('slug', $prod_slug)->exists())
            {
                $produk = Product::where('slug',$prod_slug)->first();
                return view('frontend.produk.view', compact('produk'));
            }
            else {
                return redirect('/')->with('status',"tidak ada produk ditemukan");
            }
        }
             else{
                if (Product::where('slug', $prod_slug)->exists())
                {
                    $produk = Product::where('slug',$prod_slug)->first();
                    return view('frontend.produk.view', compact('produk'));
                }
                else{
                    return redirect('/');
                }
    }
    }
    
    public function semuakategori()
    {
        $semuaproduk = Product::where('status','1')->take(4)->latest()->get();
        $semuakategori = Category::all();

        return view('frontend.semuakategori', compact('semuakategori'));
    }
    public function kontak()
    {
        return view('frontend.kontak');
    }
   
    

}