<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {   
        $keranjang = Cart::where('user_id', Auth::id())->get();
        foreach($keranjang as $item){
            if (!Product::where('id',$item->prod_id)->where('qty','>=', $item->prod_qty)->exists()) {
                $remove = Cart::where('user_id', Auth::id())->where('prod_id',$item->prod_id)->first();
            }
        }
       
        $keranjang = Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout' , compact('keranjang'));
       
    }

    public function placeorder(Request $request)
    {
        $order =  new Order();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/bukti/',$filename);
            $order->image=$filename;
        }
        $order->user_id = Auth::id();
        $order->namadepan = $request->input('namadepan');
        $order->namabelakang = $request->input('namabelakang');
        $order->email = $request->input('email');
        $order->Nohp = $request->input('Nohp');
        $order->provinsi = $request->input('provinsi');
        $order->kota = $request->input('kota');
        $order->alamat = $request->input('alamat');
        $order->detail = $request->input('detail');
        $order->Kodepos = $request->input('Kodepos');
        
        
       

        $total=0;
        $keranjangtotal =  Cart::where('user_id', Auth::id())->get();
        
        foreach ($keranjangtotal as $prod ) {
            $total +=$prod->product->harga_jual;
        }
        $order->totalharga = $total;
        $order->nomortraking = rand(100000,999909);
        $order->save();

       

        $keranjang = Cart::where('user_id', Auth::id())->get();
        foreach ($keranjang as $item) {
            OrderItem::create([
                'order_id'=> $order->id,
                'prod_id'=>$item->prod_id,
                'qty'=> $item->prod_qty,
                'price'=> $item->product->harga_jual
            ]);

            $produk = Product::where('id', $item->prod_id)->first();
            $produk->qty = $produk->qty - $item->prod_qty;
            $produk->update();
        }
        
if (Auth::user() -> alamat == 0) 
{
    $user =  User::where('id', Auth::id())->first();
    $user->namadepan = $request->input('namadepan');
    $user->namabelakang = $request->input('namabelakang');
    $user->Nohp = $request->input('Nohp');
    $user->alamat = $request->input('alamat');
    $user->Kodepos = $request->input('Kodepos');
    $user->update(); 
}


        $keranjang =  Cart::where('user_id', Auth::id())->get();
        Cart::destroy($keranjang);
        return redirect('/')->with('status','Order telah selesai');
    }


    




    

}