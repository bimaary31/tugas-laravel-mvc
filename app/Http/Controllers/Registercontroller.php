<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    public function halo(){
        return view ('halo');
    }
    
    public function form (){
        return view('form');
    }
    public function selamat_datang (){
        return view('selamat_datang');
    }
    public function selamat_datang_post(request $request){
        //dd($request -> all());
        $Firts_name = $request ["First_name"];
        return "Selamat Datang $Firts_name ";
    }
}
