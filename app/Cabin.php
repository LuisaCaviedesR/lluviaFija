<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cabin_number', 'capacity', 'description','price','available'
    ];
    
   /*public function rentals()
   {
       return $this->hasMany('App\Rental');
   }*/

}
