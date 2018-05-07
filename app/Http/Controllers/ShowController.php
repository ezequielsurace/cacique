<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use DB;

class ShowController extends Controller
{
    public function companias(Request $request){
		  


		  $data = DB::table('company')->select('name')->get();

		
			return response()->json( $data );    	
    }
}
