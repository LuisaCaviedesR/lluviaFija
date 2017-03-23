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
        return view('cabins.index', ['list' => $cabins]);/*Nombre de la vista*/
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
        Session::flash('flash_message','Cabin successfully added!');        
        return redirect('/cabins');
    }

    //Elimina un usuario de la base de datos
    public function destroy(Request $request, $id){
        try{
             $cabin = Cabin::findOrFail($id);
             $cabin->delete();
             Session::flash('flash_message', "Cabin successfully deleted!");
             return redirect('/cabins');
         }
        catch(ModelNotFoundException $e){
             Session::flash('flash_message', "The Cabin could not be found to be deleted!");
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
            Session::flash('flash_message', "The User could not be found to be edited!");
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
            Session::flash('flash_message', 'Cabin successfully edited!');
            return redirect('/cabins');
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "The Cabin could not be found to be edited!");
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
            Session::flash('flash_message', "La Cabaña ($id) no fue encontrado!");
            return redirect()->back();
        }
    }

  }
