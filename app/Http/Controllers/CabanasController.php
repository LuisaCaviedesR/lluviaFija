<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabanasController extends Controller
{
     public function crearCabana(){
        return view('lluviafija\crearCabana');/*Nombre de la vista*/
    }

    public function editarAfiliado(){
        return view('lluviafija\crearCabana');/*Nombre de la vista*/
    }

    public function eliminarCabana(){
       /* creo que no debe existir ruta para el eliminar
       return view('afiliados');/*Nombre de la vista*/
    }

    public function listarCabanas(){
        return view('lluviafija\listarCabanas');/*Nombre de la vista*/
    }
}
