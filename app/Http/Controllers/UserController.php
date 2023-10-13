<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    public function show($id){

        $data = array(

            "id" => $id,
            "name" => "Trisha",
            "age" => 25,
            "email" => "almanontrisha@gmail.com"
        );

        return view('user', $data);
    }
}
