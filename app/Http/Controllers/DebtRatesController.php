<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebtRatesController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

        public function debtrates()
    {
        return view('forms.debtrates');
    }
}
