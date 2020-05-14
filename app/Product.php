<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

   

class Product extends Model

{
protected $table='product';

    protected $fillable = [

        'titre', 'date', 'prix','detail'

    ];

public function reservation(){
        return $this->hasMany('App\Reservation');
    }


}