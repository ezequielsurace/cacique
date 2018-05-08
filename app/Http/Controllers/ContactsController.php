<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Company;
use App\PhoneType;
use App\Country;
use App\Contact;
use App\Address;
use App\Phone;

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
      
      
      $address = new Address();

      $address->street_name = $request->street_name;

      $address->street_number = $request->street_number;

      $address->country_id = $request->country_id;

      $address->state_id = $request->state_id;

      $address->city_id = $request->city_id;

      $address->save();

      $address_id = Address::getLastAdressCreated()->id;
      
      $contact = new Contact();

      $contact->profile_image = $request->file('profile_image')->store('public/image/profile_image');

      $contact->name = $request->name;
      
      $contact->company_id = $request->company_id;

      $contact->email = $request->email;

      $contact->birthdate = $request->birthdate;

      $contact->address_id = $address_id;

      $contact->save();

      $contact_id = Contact::getLastContactCreated()->id;

      $phone = new Phone();

      $phone->number = $request->phone;

      $phone->phone_type_id = $request->phone_type_id;

      $phone->contact_id = $contact_id;

      $phone->save();

    
    	return back()->with('info','New Contact Add');


    }
}
