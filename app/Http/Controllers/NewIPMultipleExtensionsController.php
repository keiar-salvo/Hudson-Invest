<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewIPMultipleExtension;
class NewIPMultipleExtensionsController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
     public function newipsmutltiext()
    {
       
        return view('forms.newipmutipleextension');
    }
    public function getNewIpMultiExt($id)
    {
      
        try {
                $getCurrentNewIPMutliExt = new NewIPMultipleExtension();
                return $getCurrentNewIPMutliExt->collectionNewIPMultiExt($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }
    
    }
}
