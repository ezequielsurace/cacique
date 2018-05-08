<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";

    public static function getLastContactCreated(){

        return Contact::select('id')->orderBy('created_at','desc')->first();

        
    }

    public static function contact($id){

        return Contact::join('address','contact.address_id','=','address.id')
        ->join('phone','phone.contact_id','=','contact.id')
        ->join('phone_type','phone.phone_type_id','=','phone_type.id')
        ->join('country','address.country_id','=','country.id')
        ->join('state','address.state_id','=','state.id')
        ->join('city','address.city_id','=','city.id')
        ->join('company','company.id','=','contact.company_id')
        ->select(         'contact.*',
                          'phone.number as phone',
                          'phone_type.name as phone_type',
                          'company.name as company',
                          'address.street_name as street_name',
                          'address.street_number as street_number',
                          'country.name as country',
                          'state.name as state',
                          'city.name as city'
                )
        ->where('contact.id','=',$id)
        ->first();

        
    }
}
