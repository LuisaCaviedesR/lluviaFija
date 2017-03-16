<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;
use Session;

class RentalController extends Controller
{
    //
     public function index(){
        $rentals = Rental::all();
        return view('rentals.index', ['list' => $rentals]);
    }
    
    public function create(){

        return view('rentals/form');

    }
    
    public function show(Request $request, $id)
    {
        
    }
    
    public function store(Request $request)
    {
       $input = $request->all();
        /*$this->validate($request, [
            'name' => 'required | string | alpha_dash | max:66',
            'email' => 'required | email',
            'password' => 'required | string | min:8 | max:64',
        ]);*/
        Rental::create($input);
        Session::flash('flash_message', 'Rental successfully added!');
        return view('rentals.index');
    }
    
}
