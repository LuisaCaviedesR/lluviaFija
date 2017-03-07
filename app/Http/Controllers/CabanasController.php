<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabanasController extends Controller
{
     public function crearCabana(){
        return view('cabanas/crearCabana');/*Nombre de la vista*/
    }

    public function editarCabana(){
        return view('cabanas/crearCabana');/*Nombre de la vista*/
    }

    public function eliminarCabana(){
       /* creo que no debe existir ruta para el eliminar
       return view('afiliados');/*Nombre de la vista*/
    }

    public function listarCabanas(){
        return view('cabanas/listarCabanas');/*Nombre de la vista*/
    }
}
