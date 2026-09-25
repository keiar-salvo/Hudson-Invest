<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddingNewInvestmentProp;
class AddingNewInvestmentPropController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function addnewinvestmentproperties()
    {
       
        return view('forms.addnewinvestmentproperty');
    }
    public function getAddNewIPColl($id)
    {
      
        try {
                $getCurrentNewIP = new AddingNewInvestmentProp();
                return $getCurrentNewIP->collectionAddNewIP($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }
    
    }
}
