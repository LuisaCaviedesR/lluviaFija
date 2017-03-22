<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    //
    protected $fillable = [
        'id_type_document', 'affiliate_id', 'name','lastname','email','phone'];
    
    public function rentals()
   {
       return $this->hasMany('App\Rental');
   }
}
