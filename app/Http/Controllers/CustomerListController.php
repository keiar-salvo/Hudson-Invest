<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Hash;
use DB;

class CustomerListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //     public function customerlist()
    // {
    //     return view('list.customerlist');
    // }

    public function clientCollections(Request $request){
     try {
        

           
            $details = new PersonalDetails();
            return $details->getClientCollection($request);
         
         
        } catch (Exception $e) {
        
            return response()->json(['Something went wrong!']);
        }
    }
}
