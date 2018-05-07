<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class CountryController extends Controller
{
    public function getStates(Request $request, $id)
    {
        if ($request->ajax()) {
            
            $states = State::state($id);
            
            return response()->json($states);
        }
    }
}
