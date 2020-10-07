<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return 'task index';
        // return view('welcome');
    }
    public function read($id){
        return 'id:' . $id;
        // return view('welcome');
    }

    public function url(){

        $url = route('task.index', ['id' => 10]);
        // return $url;
        return redirect()->route('task.index');
    }

}
