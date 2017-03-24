<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return view('users.index', ['list' => $users]);/*Nombre de la vista*/
    }

     //Para crear un usuario (muestra el formulario para ingresar la información)
    public function create(Request $request){
        $listRol = Role::pluck('name', 'id');
        return view('users.create',['listRol' => $listRol]);
    }

    //Para almacenar los datos del nuevo usuario en la bd
    public function store(Request $request){
        $input = $request->all();
        $this->validate($request, [ //validación para los campos
            'name' => 'required | string| max:66',
            'lastname' => 'required | string | max:66',
            'email' => 'required | email|unique:users',
            'password' => 'required | string | min:8 | max:64',
        ]);
        User::create($input);
        Session::flash('flash_message','El usuario fue agregado exitosamente!');
        return redirect('/users');
    }

    //Para editar un usuario (muestra el formulario con la información para editar)
    public function edit(Request $request, $id){
        $listRol = Role::pluck('name', 'id');
        try{
            $user = User::findOrFail($id);
            return view('users.edit', ['data' => $user,'listRol' => $listRol]);
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "El usuario no pudo ser encontrado para ser editado!");
            return redirect()->back();
        }
    }

    //Para almacenar los datos de la edición del usuario en la bd
    public function update(Request $request, $id){
        try{
            $user = User::findOrFail($id);
            $this->validate($request, [
                'name' => 'required | string| max:66',
                'lastname' => 'required | string | max:66',
                'email' => 'required | email|unique:users,id'.$id,
                'password' => 'required | string | min:8 | max:64',
            ]);
            $input = $request->all();
            $user->fill($input)->save();
            Session::flash('flash_message', 'El usuario fue editado de manera existosa!');
            return redirect('/users');
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "El usuario no pudo ser encontrado para ser editado!");
            return redirect()->back();
        }
    }

     //Elimina un usuario de la base de datos
    public function destroy(Request $request, $id){
        try{
             $user = User::findOrFail($id);
             $user->delete();
             Session::flash('flash_message', 'El usuario fue borrado de manera exitosa!');
             return redirect('/users');
         }
        catch(ModelNotFoundException $e){
             Session::flash('flash_message', "El usuario no fue encontrado para ser eliminado!");
             return redirect()->back();
        }
     }
}
