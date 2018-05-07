<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class StateController extends Controller
{
    public function getCities(Request $request, $id)
    {
        if ($request->ajax()) {
            
            $cities = City::city($id);
            
            return response()->json($cities);
        }
    }
}
