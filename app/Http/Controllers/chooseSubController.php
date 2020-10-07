<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chooseSubController extends Controller
{
    //
    public function index(){
        $subscriptions = DB::table('subscriptions')->select('sid', 'sname')->get();

        // return $subscriptions[0]->sname;
        return view('subscription-select', compact('subscriptions'));
    }

}
