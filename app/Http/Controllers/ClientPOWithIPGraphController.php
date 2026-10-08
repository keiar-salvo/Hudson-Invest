<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientPOWithIPGraph;
class ClientPOWithIPGraphController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function clientpowithipgraph()
    {
       
        return view('chart.clientpowithipgraph');
    }
    public function getChartPOWithGraphData($id)
    {
        try {
                $getCurrentData = new ClientPOWithIPGraph();
                
                return $getCurrentData->renderChartData($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }

    }
}
