<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "address";

    public static function getLastAdressCreated(){

        return Address::select('id')->orderBy('created_at','desc')->first();

        
    }
}
