<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    //
     protected $fillable = [
        'id', 'name'
    ];
    
     public function affiliates()
   {
       return $this->hasMany('App\affiliate');
   }
   
}
