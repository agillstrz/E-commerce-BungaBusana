<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
          
    public function cartcount()
    {
        $cartcount =  Cart::where('user_id', Auth::id())->count();
        return response()->json(['count'=>$cartcount]);
    }
        
    public function addproduk(Request $request)
    {
        $produk_id = $request->input('produk_id');
        $produk_qty = $request->input('produk_qty');


        if (Auth::check()) {
            $produk_cek = Product::where('id', $produk_id)->first();

            if ($produk_cek) {
                if(Cart::Where('prod_id',$produk_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status'=>$produk_cek->name." sudah ada dalam keranjang"]);
                }
                if($produk_cek->qty<=0){
                    return response()->json(['status'=>$produk_cek->name." sudah ada abis"]);
                }
     

      

                else{

                    $cartitem = new Cart();
                    
                    $cartitem->prod_id = $produk_id;
                    $cartitem->user_id = Auth::id();
                    $cartitem->prod_qty = $produk_qty;
                    $cartitem->save();
                    return response()->json(['status'=>$produk_cek->name." Ditambahkan kedalam keranjang"]);
                }
                
            }
        }
        else {
            return response()->json(['status'=>"Login untuk melanjutkan"]);
        }
    }

    public function viewcart()
    {   $keranjang =  Cart::where('user_id', Auth::id())->get();
        return view('frontend.keranjang', compact('keranjang'));
    }


    public function updatecart(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $produk_qty = $request->input('prod_qty');
    
        if (Auth::check())
         {
            if(Cart::Where('prod_id',$prod_id)->where('user_id',Auth::id())->exists()) 
            {
            $keranjang= Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
            $keranjang->prod_qty= $produk_qty;
            $keranjang->update();
            return response()->json(['success'=>"berhasil dihapus"]);
            }
        }
     
        
    }

    public function hapuskeranjang(Request $request)                
    {
       
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) 
            {
                $keranjang = Cart::where('prod_id',$prod_id)->where('user_id', Auth::id())->first();
                $keranjang->delete();
                return response()->json(['success'=>$keranjang->product->name."produk berhasil dihapus"]);
            }
        }

        else{
            return response()->json(['success'=>"login untuk melanjutkan"]);
        }
    }

 
}