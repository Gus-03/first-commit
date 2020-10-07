<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class yourPackageController extends Controller
{
    //
    public function index($sid){
        
        $sname = DB::table('subscriptions')->select('sname')->where('sid', $sid)->get();
        $total = DB::table('subscriptions')->select('total')->where('sid', $sid)->get();
        $saving = DB::table('subscriptions')->select('saving')->where('sid', $sid)->get();
        $price = DB::table('subscriptions')->select('price')->where('sid', $sid)->get();

        $products = DB::table('subscriptions')->select('products')->where('sid', $sid)->get();
        $products = explode(',', $products[0]->products);

        foreach($products as $product){
            $allproducts[] = DB::table('products')->where('sku', $product)->get();
        }

        // return $allproducts[3][0]->sku;
        // return $price[0]->price;
        return view('yourpackage', compact('sid', 'sname', 'allproducts', 'total', 'saving', 'price'));

        // return view('yourpackage');
    }
}