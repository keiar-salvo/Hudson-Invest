<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yearly_Investment_Portfolio;
use App\Models\Assumptions;
use App\Models\SheetFinancialIndependance;
class YearlyInvestmentPortfolioController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function yearlyinvestmentportfolio()
    {
       
        return view('chart.investmentportfolio');
    }
    public function getYearlyInvestmentPortfolio($id)
    {
        try {
                $getCurrentData = new Yearly_Investment_Portfolio();
                
                return $getCurrentData->currentYearlyData($id);
            } catch (Exception $e) {
                return response()->json(['Something went wrong!']);
            }
    }
}
