<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function customerlist()
    {
        return view('list.customerlist');
    }
}
