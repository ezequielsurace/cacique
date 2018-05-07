<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\PhoneType;
use App\Country;
use App\Contact;

class ContactsController extends Controller
{
    public function create()
    {
    
      $companies = Company::orderBy('name')->get();

      $phone_types = PhoneType::orderBy('name')->get();

      $countries = Country::orderBy('name')->get();
      
      return view('contacts.index', compact('companies','phone_types','countries'));
    }


    public function store(Request $request)
    {
    	
    	$contact = new Contact();

    	$contact->name = $request->name;

      $contact->email = $request->email;

      $contact->company_id = $request->company_id;

      $contact->phone = $request->phone;

      $contact->phone_type_id = $request->phone_type_id;

      $contact->birthdate = $request->birthdate;

      $contact->profile_image = $request->profile_image;


       dd($contact);


    	return $companies;


    }
}
