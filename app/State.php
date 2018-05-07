<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "state";

    public static function state($id){

        return State::where('country_id','=',$id)->orderBy('name')->get();
    }
}
