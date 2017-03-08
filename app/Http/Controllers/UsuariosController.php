<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function crearUsuario(){
        return view('usuarios/crearUsuario');/*Nombre de la vista*/
    }

         public function listarUsuarios(){
            return view('usuarios/listarUsuarios');/*Nombre de la vista*/
    }

}
