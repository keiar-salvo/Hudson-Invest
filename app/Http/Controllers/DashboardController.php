<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use App\Models\Assumptions;
use DB;
class DashboardController extends Controller
{
     public function dashboardindex()
    {
    
      $assumptionData = Assumptions::first();
        $totalInvestors = PersonalDetails::count();

        $recentInvestors = PersonalDetails::where('created_at', '>=', now()->subDays(30))->count();

      
        $monthlyTrends = PersonalDetails::select(
            DB::raw("DATE_FORMAT(created_at, '%b %Y') as month"),
            DB::raw("COUNT(*) as aggregate_count")
        )
        ->where('created_at', '>=', now()->subMonths(6))
        ->groupBy('month', DB::raw("YEAR(created_at)"), DB::raw("MONTH(created_at)"))
        ->orderBy(DB::raw("YEAR(created_at)"), 'asc')
        ->orderBy(DB::raw("MONTH(created_at)"), 'asc')
        ->get();

        return view('dashboard.investors', compact(
            'totalInvestors', 
            'recentInvestors', 
            'monthlyTrends',
            'assumptionData'
        ));
    }
}
