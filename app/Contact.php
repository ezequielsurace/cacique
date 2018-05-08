<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";

    public static function getLastContactCreated(){

        return Contact::select('id')->orderBy('created_at','desc')->first();

        
    }
}
