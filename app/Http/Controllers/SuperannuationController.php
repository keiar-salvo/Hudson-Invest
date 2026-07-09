<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperannuationController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

        public function contribution()
    {
        return view('forms.superannuationcontribution');
    }
}
