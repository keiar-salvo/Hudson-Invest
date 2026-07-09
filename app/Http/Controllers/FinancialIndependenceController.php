<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialIndependenceController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

        public function financialindependence()
    {
        return view('forms.financialindependence');
    }
}
