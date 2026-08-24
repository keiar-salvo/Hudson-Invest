<?php

namespace App\Http\Controllers;
use App\Models\CurrentPosition;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Hash;
use DB;

class CurrentPositionController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function currentposition()

    {
          return view('forms.currentposition');
         
      
        // return view('forms.currentposition');
    }

    public function getCurrentPositionData($id)
    {
        try {
                $getCurrentPosition = new CurrentPosition();
                return $getCurrentPosition->currentPositionData($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }
    }
}
