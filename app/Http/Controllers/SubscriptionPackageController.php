<?php

namespace App\Http\Controllers;

use App\Models\subscription;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;
class SubscriptionPackageController extends Controller
{
    
    public function index(){
        $subscription=subscription::all();
        return view ('subscriptionPackage',compact('subscription'));
    
    }


    public function getAddToCart(Request $request,$id){
        $subscription=subscription::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($subscription,$subscription->id);
        $request->session()->put('cart',$cart);
        // Session::put('cart',$cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('subscription.index')->with('success','Product was added');
    }
    public function getCart(){
        if (!Session::has('cart')){
            return view('shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart',['subscription'=> $cart->items,'totalPrice' =>$cart->totalPrice]);
    }
    public function destroy(Request $request,$id){
        $subscription=subscription::find($id);
       
        Session::get('cart');
        $oldCart=Session::get('cart');
        $cart = new Cart($oldCart);
       
        $request->session()->forget('cart',$cart);
        return redirect()->route('subscription.index')->with('success','Product was removed');
       // return back()->with('success','Item has been removed!');
    }
}
