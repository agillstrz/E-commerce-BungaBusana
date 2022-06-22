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
        $produkunggulan = Product::where('trending','1')->take(10)->get();
        $semuaproduk = Product::where('status','1')->take(4)->get();
        $kategori = Category::all();
        return view('frontend.home', compact('produkunggulan','kategori','semuaproduk'));
    }

    public function indexx(){
        $semuaproduk = Product::where('status','1')->get();
        $kategori = Category::all();
        return view('frontend.produk.semuaproduk', compact('semuaproduk'));
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
                    return redirect('/')->with('status',"tidak ada produk ditemukan");
                }
    }
    }
   
    

}