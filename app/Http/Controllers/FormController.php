<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use Carbon\Carbon;
use Hash;
use DB;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function personaldetails()
    {
        return view('forms.personaldetails');
    }

    public function storePersonalDetails(Request $request)
    {
         try {
        
            $details = new PersonalDetails();
    
            return $details->savePersonDetails($request);
            // return response()->json($request->all());
         
        } catch (Exception $e) {
        
            return response()->json(['Something went wrong!']);
        }
    }

}
