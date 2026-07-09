<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimationController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

        public function estimation()
    {
        return view('forms.estimation');
    }
}
