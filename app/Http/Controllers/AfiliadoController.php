<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    public function crearAfiliado(){
        return view('lluviafija\crearAfiliado');/*Nombre de la vista*/
    }

    public function editarAfiliado(){
        return view('lluviafija\crearAfiliado');/*Nombre de la vista*/
    }

    public function eliminarAfiliado(){
       /* creo que no debe existir ruta para el eliminar
       return view('afiliados');/*Nombre de la vista*/
    }

    public function listarAfiliados(){
        return view('lluviafija\listarAfiliados');/*Nombre de la vista*/
    }
}
