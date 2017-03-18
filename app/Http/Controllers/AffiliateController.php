<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;
use Session;

class AffiliateController extends Controller
{
     public function index(){
        $affiliates = Affiliate::all();
        return view('affiliates.index', ['list' => $affiliates]);/*Nombre de la vista*/
    }

    public function create(Request $request)
    {
    return view('affiliates.create');
    }

    public function store(Request $request)

    {
        $input = $request->all();
        $this->validate($request, [ //validación para los campos
            'id_type_document' => 'required | numeric ',
            'affiliate_id' => 'required | numeric ',
            'name' => 'required | string| max:80',
            'lastname' => 'required | string| max:80',
            'email' => 'required | string| max:150',
            'phone' => 'required | string| max:20',
            'available' => 'boolean',
        ]);
        Affiliate::create($input);
        Session::flash('flash_message','Affiliate successfully added!');
        return redirect('/affiliates');
    }
}

