<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){

        $data = [

            'name' => 'Guybrush'

        ];

        return view('pages.home', $data); 
    }
}
