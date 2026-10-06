<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultipleNewIP;
class MultipleNewIPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function multiplenewinvestmentproperties()
    {
       
        return view('forms.multiplenewinvestmentproperty');
    }
    public function getMultipleNewIPColl($id)
    {
      
        try {
                $getCurrentMultipleNewIP = new MultipleNewIP();
                return $getCurrentMultipleNewIP->collectionMultipleNewIP($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }
    
    }
}
