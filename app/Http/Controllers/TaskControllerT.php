<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskControllerT extends Controller
{
    //    
    public function index(){
        return 'index';
        // return view('welcome');
    }
    public function read($id){
        return 'id:' . $id;
        // return view('welcome');
    }
}
