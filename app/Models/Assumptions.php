<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Carbon\Carbon;
class Assumptions extends Model
{
    protected $table = 'assumptions';
    protected $fillable = [
        'annual_compound_growth_rate_investment_assets','annual_inflation_rate','income_investment_portfolio_assets','annual_interest_rate_mortgages','annual_contribution_superannuation'
    ];

    public function saveAssumptionsDetails(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'annual_compound_growth_rate_investment_assets' => 'required|string|max:255',
            'annual_inflation_rate' => 'required|string|max:255',
            'income_investment_portfolio_assets'  => 'required|string|max:255',
            'annual_interest_rate_mortgages'  => 'required|string|max:255',
            'annual_contribution_superannuation'  => 'required|string|max:255',
          
        ]);

          if ($validator->fails()) {
        
            return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 400); 
        }

        try {
            $assumptions = new Assumptions;
            $assumptions->annual_compound_growth_rate_investment_assets = $request->input('annual_compound_growth_rate_investment_assets');
            $assumptions->annual_inflation_rate = $request->input('annual_inflation_rate');
            $assumptions->income_investment_portfolio_assets = $request->input('income_investment_portfolio_assets');
            $assumptions->annual_interest_rate_mortgages = $request->input('annual_interest_rate_mortgages');
            $assumptions->annual_contribution_superannuation = $request->input('annual_contribution_superannuation');
            $assumptions->save();
             return response()->json(['Successfully saved']);
       } catch (Exception $e) {
         
            return response()->json(['Error saving']);
        }
    }

    public function getAssumptions(Request $request){
        $collection = Assumptions::get();
        if ($request->ajax()) {
        return response()->json($collection);

    }
     return view('settings.assumptions', [
       'proc' => $collection
    ]);
    
    }

    public function updateExistingRates(Request $request){
            $updateassumptiontrates = Assumptions::where('id',$request->input('assumption_id'))->update([
                'annual_compound_growth_rate_investment_assets' => $request->input('annual_compound_growth_rate_investment_assets'),
                'annual_inflation_rate' => $request->input('annual_inflation_rate'),
                'income_investment_portfolio_assets' => $request->input('income_investment_portfolio_assets'),
                'annual_interest_rate_mortgages' => $request->input('annual_interest_rate_mortgages'),
                'annual_contribution_superannuation' => $request->input('annual_contribution_superannuation'),         
              
                ]);
                  return response()->json(['Changes Applied!']);
    }

 
    
}
