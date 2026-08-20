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
    }
}
