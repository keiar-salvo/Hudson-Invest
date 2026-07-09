<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsLiabilitiesController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

        public function assetsliabilities()
    {
        return view('forms.assetsliabilities');
    }
}
