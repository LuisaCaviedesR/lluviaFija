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
        $rentals = Rental::with('cabins')->get();
       
        return view('rentals.index', ['list' => $rentals]);
    }
    
    public function create(){
        $affiliates = affiliate::pluck('name', 'id');
        $cabins = Cabin::pluck('cabin_number', 'id');
        $rental='';
        return view('rentals.create',['data' => $rental,'listAffiliates' => $affiliates,'listCabins' => $cabins]);

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
            $this->validate($request, [ //validación para los campos
                'cabin_id' => 'required',
                'datein' => 'required',
                'dateout' => 'required',
                'days' => 'required',
                'nights' => 'required',
                'price' => 'required',
                'quantity' => 'required | numeric'
               
            ]);
            $input = $request->all();
            $rental->fill($input)->save();
            Session::flash('flash_message', 'Alquiler ha sido editado!');
            return redirect('rentals');
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "El alquiler no ha podido ser encontrado para editar!");
            return redirect()->back();
        }
    }
    
    public function store(Request $request)
    {
       $input = $request->all();
       
       $this->validate($request, [ //validación para los campos
                'cabin_id' => 'required',
                'datein' => 'required',
                'dateout' => 'required',
                'days' => 'required',
                'nights' => 'required',
                'price' => 'required',
                'quantity' => 'required | numeric'
               
            ]);
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
