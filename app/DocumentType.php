<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    //
     protected $fillable = [
        'id', 'name', 'created_ad', 'updated_ad'
    ];
}
