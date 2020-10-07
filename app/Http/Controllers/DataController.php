<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User1;

class DataController extends Controller
{
    //
    public function index(){
        // $user = DB::select('select * from users');
        // return $user;

        // $user = DB::table('users')->find(1);
        // dd($user);
        // return response()->json($user);


        $products = DB::table('products')->select('sku', 'price')->get();
        return response()->json($products);


    }
}
