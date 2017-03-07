<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    public function index(){

        return view('alquiler/index');

    }
    
    public function registrarAlquiler(){

        return view('alquiler/form');

    }
}
