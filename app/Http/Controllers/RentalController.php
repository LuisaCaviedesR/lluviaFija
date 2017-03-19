<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;
use App\affiliate;
use App\Cabin;
use Session;

class RentalController extends Controller
{
    //
     public function index(){
        $rentals = Rental::all();
        return view('rentals.index', ['list' => $rentals]);
    }
    
    public function create(){
        $affiliates = affiliate::pluck('name', 'id');
        $cabins = Cabin::pluck('cabin_number', 'id');
        $rental='';
        return view('rentals.create',['data' => $rental,'listAffiliates' => $affiliates,'listCabins' => $cabins]);

    }
    
    public function show(Request $request, $id)
    {
        
    }
    
    public function edit(Request $request, $id){
        try{
            $rental = Rental::findOrFail($id);
            $affiliates = affiliate::pluck('name', 'id');
            $cabins = Cabin::pluck('cabin_number', 'id');
            return view('rentals.edit', ['data' => $rental,'listAffiliates' => $affiliates,'listCabins' => $cabins]);
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "El alquiler no ha podido ser encontrado para editar!");
            return redirect()->back();
        }
    }
    
    
    public function update(Request $request, $id){
        try{
            $rental = rental::findOrFail($id);
            /*$this->validate($request, [ //validación para los campos
                'cabin_number' => 'required | numeric ',
                'description' => 'required | string| max:255',
                'capacity' => 'required | numeric',
                'precio' => 'numeric',
                'available' => 'boolean',
            ]);*/
            $input = $request->all();
            $rental->fill($input)->save();
            Session::flash('flash_message', 'Alquiler ha sido editado!');
            return redirect('rentals');
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "The Cabin could not be found to be edited!");
            return redirect()->back();
        }
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
        Session::flash('flash_message', 'Alquiler ha sido registrado!');
        return redirect('rentals');
    }
    
    public function destroy(Request $request, $id)
     {
         try
         {
            $rental = Rental::findOrFail($id);
            $rental->delete();
            Session::flash('flash_message', 'Alquiler ha sido eliminado!');
            return redirect('rentals');
         }
         catch(ModelNotFoundException $e)
         {
            Session::flash('flash_message', "The User ($id) could not be found to be deleted!");
            return redirect()->back();
        }
    }
    
}
