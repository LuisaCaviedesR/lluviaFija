<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentalController extends Controller
{
    //
     public function index(){

        return view('rental/index');

    }
    
    public function create(){

        return view('rental.form');

    }
    
}
