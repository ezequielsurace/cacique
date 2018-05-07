<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "city";

    public static function city($id){

        return City::where('state_id','=',$id)->orderBy('name')->get();
    }
}
