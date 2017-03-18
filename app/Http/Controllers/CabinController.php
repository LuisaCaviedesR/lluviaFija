<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabin;
use Session;

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



    public function editarCabana(){
        return view('cabanas/crearCabana');/*Nombre de la vista*/
    }

    public function eliminarCabana(){
       /* creo que no debe existir ruta para el eliminar
       return view('afiliados');/*Nombre de la vista*/
    }   
}
