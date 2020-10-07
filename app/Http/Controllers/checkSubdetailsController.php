<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class checkSubdetailsController extends Controller
{
    //
    public function index($subscription)
    {
        $sname = DB::table('subscriptions')->select('sname')->where('sid', $subscription)->get();
        $total = DB::table('subscriptions')->select('total')->where('sid', $subscription)->get();
        $saving = DB::table('subscriptions')->select('saving')->where('sid', $subscription)->get();
        $price = DB::table('subscriptions')->select('price')->where('sid', $subscription)->get();

        $products = DB::table('subscriptions')->select('products')->where('sid', $subscription)->get();
        $products = explode(',', $products[0]->products);

        foreach($products as $product){
            $allproducts[] = DB::table('products')->where('sku', $product)->get();
        }

        // return $allproducts[3][0]->sku;
        // return $price[0]->price;
        return view('subdetails', compact('subscription', 'sname', 'allproducts', 'total', 'saving', 'price', 'subscription'));
    }

}
