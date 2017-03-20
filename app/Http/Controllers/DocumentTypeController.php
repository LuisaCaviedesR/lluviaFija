<?php

namespace App\Http\Controllers;
use App\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    function create()
    {
       //
        $documentsTypes = DocumentType::all();
        return view('affiliates.create',['listDocumentsTypes' => $documentsTypes]);
    }
  }
