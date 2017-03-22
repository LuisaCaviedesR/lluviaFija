<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'days', 'nights', 'price','quantity','datein','dateout','cabin_id','affiliates_id'
    ];
    
   public function cabins()
   {
       return $this->belongsToMany('App\Cabin','rentals','cabin_id');
   }
    
   public function affiliates()
   {
       return $this->belongsToMany('App\affiliate','rentals','affiliates_id');
   }
}
