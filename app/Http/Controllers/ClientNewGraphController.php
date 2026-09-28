<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientNewGraph;

class ClientNewGraphController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function clientnewgraph()
    {
       
        return view('chart.clientnewgraph');
    }
    public function getChartInitalData($id)
    {
        try {
                $getCurrentData = new ClientNewGraph();
                
                return $getCurrentData->renderChartData($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }

    }
}
