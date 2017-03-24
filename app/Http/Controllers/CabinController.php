<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabin;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CabinController extends Controller
{
     public function index(){
        $cabins = Cabin::all();
        return view('cabins.index', ['list' => $cabins]);
    } 
    
    public function create(Request $request){
        return view('cabins.create');
    }
    
    public function store(Request $request){
        $input = $request->all();
        $this->validate($request, [ //validación para los campos
            'cabin_number' => 'required | numeric ',
            'description' => 'required | string| max:255',
            'capacity' => 'required | numeric',
            'precio' => 'numeric',
            'available' => 'boolean',
        ]);
        Cabin::create($input);
        Session::flash('flash_message','La cabaña ha sido registrada!');
        return redirect('/cabins');
    }

    //Elimina un usuario de la base de datos
    public function destroy(Request $request, $id){
        try{
             $cabin = Cabin::findOrFail($id);
             $cabin->delete();
             Session::flash('flash_message', "La cabaña ha sido eliminada!");
             return redirect('/cabins');
         }
        catch(ModelNotFoundException $e){
             Session::flash('flash_message', "La cabaña no ha podido ser encontrada para eliminar!");
             return redirect()->back();
        }
    }

 //Para editar un usuario (muestra el formulario con la información para editar)
    public function edit(Request $request, $id){
        try{
            $cabin = Cabin::findOrFail($id);
            return view('cabins.edit', ['data' => $cabin]);
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "La cabaña no ha podido ser encontrada para editar!");
            return redirect()->back();
        }
    }

    //Para almacenar los datos de la edición del usuario en la bd
    public function update(Request $request, $id){
        try{
            $cabin = Cabin::findOrFail($id);
            $this->validate($request, [ //validación para los campos
                'cabin_number' => 'required | numeric ',
                'description' => 'required | string| max:255',
                'capacity' => 'required | numeric',
                'precio' => 'numeric',
                'available' => 'boolean',
            ]);
            $input = $request->all();
            $cabin->fill($input)->save();
            Session::flash('flash_message', 'La cabaña ha sido editada!');
            return redirect('/cabins');
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "La cabaña no ha podido ser encontrada para editar!");
            return redirect()->back();
        }
    }
    
    
     public function getPrice($id)
    {
      $cabin = Cabin::findOrFail($id);
        
      return $cabin;

    }

     public function show(Request $request, $id){
        try{
            $cabin = Cabin::findOrFail($id);
            return view('cabins.show', ['data' => $cabin]);
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "La Cabaña ($id) no fue encontrada!");
            return redirect()->back();
        }
    }

  }
