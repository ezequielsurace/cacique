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
use Illuminate\Support\Facades\DB;

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

    public function show()
    {
      $contact = Contact::join('address','contact.address_id','=','address.id')
          ->join('phone','phone.contact_id','=','contact.id')
          ->join('phone_type','phone.phone_type_id','=','phone_type.id')
          ->join('country','address.country_id','=','country.id')
          ->join('state','address.state_id','=','state.id')
          ->join('city','address.city_id','=','city.id')
          ->join('company','company.id','=','contact.company_id')
          ->select(DB::raw('contact.id as id,
                            contact.name as name,
                            contact.email as email,
                            phone.number as phone,
                            phone_type.name as phone_type,
                            company.name as company,
                            address.street_name as street_name,
                            address.street_number as street_number,
                            country.name as country,
                            state.name as state,
                            city.name as city'))->get();


      return $contact; 

    }


    public function index(Request $request, $id)
    {
        
            $contact = Contact::contact($id);
            

      return view('profile.index', [
          'id' => $id,
          'name' => $contact->name,
          'email' => $contact->email,
          'birthdate' => $contact->birthdate,
          'profile_image' => str_replace('public','storage',$contact->profile_image),
          'phone' => $contact->phone,
          'phone_type' => $contact->phone_type,
          'company' => $contact->company,
          'street_name' => $contact->street_name,
          'street_number' => $contact->street_number,
          'country' => $contact->country,
          'state' => $contact->state,
          'city' => $contact->city

        ]);

      }



    public function delete($id)
    {
        
    
      
      $address_id = Contact::where('id','=',$id)->select('address_id as id')->first();

      $path = Contact::where('id','=',$id)->select('profile_image')->first();

      Storage::delete($path->profile_image);
      
      Address::where('id','=',$address_id->id)->delete();

      Contact::where('id','=',$id)->delete();

      Phone::where('contact_id','=',$id)->delete();
      
      
      
      return "true";
        
    
    }



}
