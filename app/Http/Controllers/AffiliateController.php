<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;
use App\DocumentType;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AffiliateController extends Controller
{
     public function index(){
        $affiliates = Affiliate::all();
        return view('affiliates.index', ['list' => $affiliates]);/*Nombre de la vista*/
    }

    public function create(Request $request)    {
       $documentTypes = DocumentType::pluck('name', 'id');
       return view('affiliates.create',['listDocumentsTypes' => $documentTypes]);
    }

    public function store(Request $request)    {
        //print_r($request);
        $input = $request->all();
        $this->validate($request, [ //validación para los campos
            'id_type_document' => 'required | numeric',
            'number_id' => 'required | numeric| unique:affiliates',
            'name' => 'required | string| max:80',
            'lastname' => 'required | string| max:80',
            'email' => 'required | email| max:150|unique:affiliates',
            'phone' => 'required | string| max:20',
        ]);
        Affiliate::create($input);
        Session::flash('flash_message','EL Afiliado fue creado!');
        return redirect('/affiliates');
    }

    public function edit(Request $request, $id){
        try{
             $affiliate = Affiliate::findOrFail($id);
             $documentTypes = DocumentType::pluck('name', 'id');
            return view('affiliates.edit', ['data' => $affiliate,'listDocumentsTypes' => $documentTypes]);
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "The Afiliado could not be found to be edited!");
            return redirect()->back();
        }
    }

    //Para almacenar los datos de la edición del usuario en la bd
    public function update(Request $request, $id){
        try{
            $affiliate = Affiliate::findOrFail($id);
            $this->validate($request, [ //validación para los campos
            'id_type_document' => 'required | numeric',
            'number_id' => 'required | numeric| unique:affiliates,id'.$id,
            'name' => 'required | string| max:80',
            'lastname' => 'required | string| max:80',
            'email' => 'required |email| max:150| unique:affiliates,id,'.$id,
            'phone' => 'required | string| max:20',
            ]);
            $input = $request->all();
            $affiliate->fill($input)->save();
            Session::flash('flash_message', 'Afiliado se edito correctamente!');
            return redirect('/affiliates');
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "El Afiliado no se pudo encontrar para ser corregido!");
            return redirect()->back();
        }
    }

     public function destroy(Request $request, $id)
     {
         try
         {
            $affiliate = Affiliate::findOrFail($id);
            $affiliate->delete();
            Session::flash('flash_message', 'El Afiliiado ha sido eliminado!');
            return redirect('affiliates');
         }
         catch(ModelNotFoundException $e)
         {
            Session::flash('flash_message', "El Afiliado ($id) no fue encontrado para ser borrado!");
            return redirect()->back();
        }
    }
    
     public function show(Request $request, $id){
        try{
            $affiliate = affiliate::findOrFail($id);
            return view('affiliates.show', ['data' => $affiliate]);
        }
        catch(ModelNotFoundException $e){
            Session::flash('flash_message', "El Afiliado ($id) no fue encontrado!");
            return redirect()->back();
        }
    }

}

