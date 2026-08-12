<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;

class PersonalDetails extends Model
{
    protected $table = 'personal_details';

       protected $fillable = [
        'name','residential_address','phone_home','phone_mobile','email','age_client','age_partner','age_average','amount_per_week','initial_appointment_date',
        'desired_retirement_age','in_seven_years','in_fourteen_years','in_twenty_one_years'
    ];
   
    public function savePersonDetails(Request $request)
    {
      $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'residential_address' => 'required|string|max:255',
            'phone_home'  => 'required|string|max:255',
            'phone_mobile'  => 'required|string|max:255',
            'email' => 'required|string|email:rfc,dns|max:255',
            'age_client'  => 'required|string|max:255',
            'age_partner'  => 'required|string|max:255',
            'age_average'  => 'required|string|max:255',
            'amount_per_week'  => 'required|string|max:255',
            'initial_appointment_date'  => 'required|string|max:255',
            'desired_retirement_age'  => 'required|string|max:255',
            'in_seven_years'  => 'required|string|max:255',
            'in_fourteen_years'  => 'required|string|max:255',
            'target_age'  => 'required|string|max:255',
            'years_to_target_age'  => 'required|string|max:255',
            'desired_retirement_date'  => 'required|string|max:255',
            'current_income_required_in_retirement'  => 'required|string|max:255',
        ]);

          if ($validator->fails()) {
        
            return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 400); 
        }
       
    
  try {
             DB::beginTransaction();
            $save  = new PersonalDetails;
      
            $save->details_id   = $request->input('details_id');
            $save->name   = $request->input('name');
            $save->residential_address   = $request->input('residential_address');
            $save->phone_home  = $request->input('phone_home');
            $save->phone_mobile  = $request->input('phone_mobile');
            $save->email     = $request->input('email');
            $save->age_client   = $request->input('age_client');
            $save->age_partner   = $request->input('age_partner');
            $save->age_average   = $request->input('age_average');
            $save->amount_per_week   = $request->input('amount_per_week');
            $save->initial_appointment_date   = $request->input('initial_appointment_date');
            $save->desired_retirement_age   = $request->input('desired_retirement_age');
     
            $save->in_seven_years   = $request->input('in_seven_years');
            $save->in_fourteen_years   = $request->input('in_fourteen_years');
            $save->in_twenty_one_years   = $request->input('in_twenty_one_years');
            $save->encoded_by   = $request->input('encoded_by');
            $save->date_encoded = Carbon::now()->toDateString();
            $save->save();

            $financeData = new FinancialIndependence;
            $financeData->details_id   = $request->input('details_id');
            $financeData->target_age = $request->input('target_age');
            $financeData->years_to_target_age = $request->input('years_to_target_age');
            $financeData->desired_retirement_date = $request->input('desired_retirement_date');
            $financeData->current_income_required_in_retirement= $request->input('current_income_required_in_retirement');
            $financeData->encoded_by   = $request->input('encoded_by');
            $financeData->date_encoded = Carbon::now()->toDateString();
            $financeData->save();

        
          

             foreach ($request->input('row') as $value) {
                if(isset($value['non_investment_owner']) && isset($value['client_percentage']) && isset($value['partner_percentage']) && isset($value['market_value']) && isset($value['client']) && isset($value['partner']))
                    {
                $investment = new InvestmentPropertyAsset;
                $investment->details_id   = $request->input('details_id');
                $investment->investment_property = $value['non_investment_owner'];
                $investment->client_percentage = $value['client_percentage'];
                $investment->partner_percentage = $value['partner_percentage'];
                $investment->market_value = $value['market_value'];
                $investment->client = $value['client'];
                $investment->partner = $value['partner'];
                $investment->encoded_by   = $request->input('encoded_by');
                $investment->date_encoded = Carbon::now()->toDateString();
                $investment->save();

             
                    }
                
             }

             
             foreach ($request->input('noninvestmentasset') as $value) {
                if(isset($value['other_personal_asset']) && isset($value['non_investment_asset_client_percentage']) && isset($value['non_investment_asset_partner_percentage']) && isset($value['non_investment_asset_market_value']) && isset($value['non_investment_asset_client']) && isset($value['non_investment_asset_partner']))
                    {
                $non_investment = new Other_Personal_Assets_Non_Invesmtment;
                $non_investment->details_id   = $request->input('details_id');
                $non_investment->other_personal_asset = $value['other_personal_asset'];
                $non_investment->non_investment_asset_client_percentage = $value['non_investment_asset_client_percentage'];
                $non_investment->non_investment_asset_partner_percentage = $value['non_investment_asset_partner_percentage'];
                $non_investment->non_investment_asset_market_value = $value['non_investment_asset_market_value'];
                $non_investment->non_investment_asset_client = $value['non_investment_asset_client'];
                $non_investment->non_investment_asset_partner = $value['non_investment_asset_partner'];
                $non_investment->encoded_by   = $request->input('encoded_by');
                $non_investment->date_encoded = Carbon::now()->toDateString();
                $non_investment->save();
             
                    }
                
                    //   return response()->json($request->all()); 
      
             }


             if($request->input('salary_frequency') !== null || $request->input('bonus_frequency') !== null || $request->input('interest_income_frequency') !== null || $request->input('rental_income_frequency') !== null || $request->input('dividend_income_frequency') !== null || $request->input('ss_income_frequency') !== null || $request->input('business_income_frequency') !== null || $request->input('other_income_frequency') !== null){
                
                $income = new Income;
                $income->details_id = $request->input('details_id');

                $income->salary_frequency = $request->input('salary_frequency');
                $income->salary_client = $request->input('salary_client');
                $income->salary_partner = $request->input('salary_partner');
                $income->salary_client_annual = $request->input('salary_client_annual');
                $income->salary_partner_annual = $request->input('salary_partner_annual');

                $income->bonus_frequency = $request->input('bonus_frequency');
                $income->bonus_client = $request->input('bonus_client');
                $income->bonus_partner = $request->input('bonus_partner');
                $income->bonus_client_annual = $request->input('bonus_client_annual');
                $income->bonus_partner_annual = $request->input('bonus_partner_annual');

                $income->interest_income_frequency = $request->input('interest_income_frequency');
                $income->interest_income_client = $request->input('interest_income_client');
                $income->interest_income_partner = $request->input('interest_income_partner');
                $income->interest_income_client_annual = $request->input('interest_income_client_annual');
                $income->interest_income_partner_annual = $request->input('interest_income_partner_annual');

                $income->rental_income_frequency = $request->input('rental_income_frequency');
                $income->rental_income_client = $request->input('rental_income_client');
                $income->rental_income_partner = $request->input('rental_income_partner');
                $income->rental_income_client_annual = $request->input('rental_income_client_annual');
                $income->rental_income_partner_annual = $request->input('rental_income_partner_annual');

                $income->dividend_income_frequency = $request->input('dividend_income_frequency');
                $income->dividend_income_client = $request->input('dividend_income_client');
                $income->dividend_income_partner = $request->input('dividend_income_partner');
                $income->dividend_income_client_annual = $request->input('dividend_income_client_annual');
                $income->dividend_income_partner_annual = $request->input('dividend_income_partner_annual');


                $income->ss_income_frequency = $request->input('ss_income_frequency');
                $income->ss_income_client = $request->input('ss_income_client');
                $income->ss_income_partner = $request->input('ss_income_partner');
                $income->ss_income_client_annual = $request->input('ss_income_client_annual');
                $income->ss_income_partner_annual = $request->input('ss_income_partner_annual');

                $income->business_income_frequency = $request->input('business_income_frequency');
                $income->business_income_client = $request->input('business_income_client');
                $income->business_income_partner = $request->input('business_income_partner');
                $income->business_income_client_annual = $request->input('business_income_client_annual');
                $income->business_income_partner_annual = $request->input('business_income_partner_annual');

                $income->other_income_frequency = $request->input('other_income_frequency');
                $income->other_income_client = $request->input('other_income_client');
                $income->other_income_partner = $request->input('other_income_partner');
                $income->other_income_client_annual = $request->input('other_income_client_annual');
                $income->other_income_partner_annual = $request->input('other_income_partner_annual');

                $income->total_income_client_annual = $request->input('total_income_client_annual');
                $income->total_income_partner_annual = $request->input('total_income_partner_annual');

                $income->encoded_by   = $request->input('encoded_by');
                $income->date_encoded = Carbon::now()->toDateString();
                $income->save();
             }

          
            if ($request->input('gross_salary') !== null){
                $supperannuation = new Superannuation;
                $supperannuation->details_id = $request->input('details_id');
                $supperannuation->gross_salary = $request->input('gross_salary');
                $supperannuation->sg_rate = $request->input('sg_rate');
                $supperannuation->annual_contribution = $request->input('annual_contribution');
                $supperannuation->quarterly_contribution = $request->input('quarterly_contribution');
                $supperannuation->partner_gross_salary = $request->input('partner_gross_salary');
                $supperannuation->partner_sg_rate = $request->input('partner_sg_rate');
                $supperannuation->partner_annual_contribution = $request->input('partner_annual_contribution');
                $supperannuation->partner_quarterly_contribution = $request->input('partner_quarterly_contribution');
                $supperannuation->grand_total_annual = $request->input('grand_total_annual');
                $supperannuation->grand_total_quarterly = $request->input('grand_total_quarterly');
                $supperannuation->encoded_by   = $request->input('encoded_by');
                $supperannuation->date_encoded = Carbon::now()->toDateString();
                $supperannuation->save();

            }
           if($request->input('principle_residence') !== null || $request->input('cash_everyday') !== null ){
                $non_investment_asset = new Non_Investment_Assets;
                $non_investment_asset->details_id = $request->input('details_id');
                $non_investment_asset->principle_residence = $request->input('principle_residence');
                $non_investment_asset->principle_client_percentage = $request->input('principle_client_percentage');
                $non_investment_asset->principle_partner_percentage = $request->input('principle_partner_percentage');
                $non_investment_asset->principle_market_value = $request->input('principle_market_value');
                $non_investment_asset->principle_client = $request->input('principle_client');
                $non_investment_asset->principle_partner = $request->input('principle_partner');
                $non_investment_asset->cash_everyday = $request->input('cash_everyday');
                $non_investment_asset->cash_client_percentage = $request->input('cash_client_percentage');
                $non_investment_asset->cash_partner_percentage = $request->input('cash_partner_percentage');
                $non_investment_asset->cash_market_value = $request->input('cash_market_value');
                $non_investment_asset->cash_client = $request->input('cash_client');
                $non_investment_asset->cash_partner = $request->input('cash_partner');
                $non_investment_asset->total_market_value = $request->input('total_non_investment_market_value');
                $non_investment_asset->total_client = $request->input('total_non_investment_client');
                $non_investment_asset->total_partner = $request->input('total_non_investment_partner');
                $non_investment_asset->encoded_by   = $request->input('encoded_by');
                $non_investment_asset->date_encoded = Carbon::now()->toDateString();
                $non_investment_asset->save();
           }
           
            if($request->input('long_term_investment_asset') !== null || $request->input('superannuation_client_partner_percentage') !== null || $request->input('superannuation_partner_net') ||
             $request->input('shares_fund') !== null || $request->input('business') !== null){
                $investment_asset = new Investment_Asset;
                $investment_asset->details_id = $request->input('details_id');
                $investment_asset->long_term_investment_asset = $request->input('long_term_investment_asset');
                $investment_asset->long_term_client_percentage = $request->input('long_term_client_percentage');
                $investment_asset->long_term_partner_percentage = $request->input('long_term_partner_percentage');
                $investment_asset->long_term_market_value = $request->input('long_term_market_value');
                $investment_asset->long_term_client = $request->input('long_term_client');
                $investment_asset->long_term_partner = $request->input('long_term_partner');
                $investment_asset->superannuation_client_net = $request->input('superannuation_client_net');
                $investment_asset->superannuation_client_client_percentage = $request->input('superannuation_client_client_percentage');
                $investment_asset->superannuation_client_partner_percentage = $request->input('superannuation_client_partner_percentage');
                $investment_asset->superannuation_client_market_value = $request->input('superannuation_client_market_value');
                $investment_asset->superannuation_client_client = $request->input('superannuation_client_client');
                $investment_asset->superannuation_client_partner = $request->input('superannuation_client_partner');
                $investment_asset->superannuation_partner_net = $request->input('superannuation_partner_net');
                $investment_asset->superannuation_partner_client_percentage = $request->input('superannuation_partner_client_percentage');
                $investment_asset->superannuation_partner_parnter_percentage = $request->input('superannuation_partner_parnter_percentage');
                $investment_asset->superannuation_partner_market_value = $request->input('superannuation_partner_market_value');
                $investment_asset->superannuation_partner_client = $request->input('superannuation_partner_client');
                $investment_asset->superannuation_partner_partner = $request->input('superannuation_partner_partner');
                $investment_asset->shares_fund = $request->input('shares_fund');
                $investment_asset->shares_fund_client_percentage = $request->input('shares_fund_client_percentage');
                $investment_asset->shares_fund_partner_percentage = $request->input('shares_fund_partner_percentage');
                $investment_asset->shares_fund_market_value = $request->input('shares_fund_market_value');
                $investment_asset->shares_fund_client = $request->input('shares_fund_client');
                $investment_asset->shares_fund_partner = $request->input('shares_fund_partner');
                $investment_asset->business = $request->input('business');
                $investment_asset->business_client_percentage = $request->input('business_client_percentage');
                $investment_asset->business_partner_percentage = $request->input('business_partner_percentage');
                $investment_asset->business_market_value = $request->input('business_market_value');
                $investment_asset->business_client = $request->input('business_client');
                $investment_asset->business_partner = $request->input('business_partner');
                $investment_asset->total_investment_asset_market_value = $request->input('total_investment_asset_market_value');
                $investment_asset->total_investment_asset_client = $request->input('total_investment_asset_client');
                $investment_asset->total_investment_asset_partner = $request->input('total_investment_asset_partner');
                $investment_asset->total_asset_market_value = $request->input('total_asset_market_value');
                $investment_asset->total_asset_client = $request->input('total_asset_client');
                $investment_asset->total_asset_partner = $request->input('total_asset_partner');
                $investment_asset->encoded_by   = $request->input('encoded_by');
                $investment_asset->date_encoded = Carbon::now()->toDateString();
                $investment_asset->save();
            }
           
            if($request->input('mortgage_residence') !== null || $request->input('personal_loans') !== null || $request->input('car_loans') !== null){
                $liabilities_non_invesment = new Liabilities_Non_Investment;
                $liabilities_non_invesment->details_id = $request->input('details_id');
                $liabilities_non_invesment->mortgage_residence = $request->input('mortgage_residence');
                $liabilities_non_invesment->mortgage_client_percentage = $request->input('mortgage_client_percentage');
                $liabilities_non_invesment->mortgage_partner_percentage = $request->input('mortgage_partner_percentage');
                $liabilities_non_invesment->mortgage_market_value = $request->input('mortgage_market_value');
                $liabilities_non_invesment->mortgage_client = $request->input('mortgage_client');
                $liabilities_non_invesment->mortgage_partner = $request->input('mortgage_partner');
                $liabilities_non_invesment->personal_loans = $request->input('personal_loans');
                $liabilities_non_invesment->personal_loans_client_percentage = $request->input('personal_loans_client_percentage');
                $liabilities_non_invesment->personal_loans_partner_percentage = $request->input('personal_loans_partner_percentage');
                $liabilities_non_invesment->personal_loans_market_value = $request->input('personal_loans_market_value');
                $liabilities_non_invesment->personal_loans_client = $request->input('personal_loans_client');
                $liabilities_non_invesment->personal_loans_partner = $request->input('personal_loans_partner');
                $liabilities_non_invesment->car_loans = $request->input('car_loans');
                $liabilities_non_invesment->car_loans_client_percentage = $request->input('car_loans_client_percentage');
                $liabilities_non_invesment->car_loans_partner_percentage = $request->input('car_loans_partner_percentage');
                $liabilities_non_invesment->car_loans_market_value = $request->input('car_loans_market_value');
                $liabilities_non_invesment->car_loans_client = $request->input('car_loans_client');
                $liabilities_non_invesment->car_loans_partner = $request->input('car_loans_partner');
                $liabilities_non_invesment->total_non_invesment_liabilities_market_value = $request->input('total_non_invesment_liabilities_market_value');
                $liabilities_non_invesment->total_non_invesment_liabilities_client = $request->input('total_non_invesment_liabilities_client');
                $liabilities_non_invesment->total_non_invesment_liabilities_partner = $request->input('total_non_invesment_liabilities_partner');
                $liabilities_non_invesment->encoded_by = $request->input('encoded_by');
                $liabilities_non_invesment->date_encoded = Carbon::now()->toDateString();
                $liabilities_non_invesment->save();
            }
          

            foreach ($request->input('debt') as $value) {
                if(isset($value['other_debt']) && isset($value['other_debt_client_percentage']) && isset($value['other_debt_partner_percentage']) && isset($value['other_debt_market_value']) && isset($value['other_debt_client']) && isset($value['other_debt_parnter']))
                    {
                $other_debt = new Other_Debt;
                $other_debt->details_id   = $request->input('details_id');
                $other_debt->other_debt = $value['other_debt'];
                $other_debt->other_debt_client_percentage = $value['other_debt_client_percentage'];
                $other_debt->other_debt_partner_percentage = $value['other_debt_partner_percentage'];
                $other_debt->other_debt_market_value = $value['other_debt_market_value'];
                $other_debt->other_debt_client = $value['other_debt_client'];
                $other_debt->other_debt_parnter = $value['other_debt_parnter'];
               
                $other_debt->encoded_by   = $request->input('encoded_by');
                $other_debt->date_encoded = Carbon::now()->toDateString();
                $other_debt->save();
             
                    }
                
                    //   return response()->json($request->all()); 
      
             }

            foreach ($request->input('creditcard') as $value) {
                if(isset($value['credit_card']) && isset($value['credit_card_client_percentage']) && isset($value['credit_card_partner_percentage']) && isset($value['credit_card_market_value']) && isset($value['credit_card_client']) && isset($value['credit_card_partner']))
                    {
                $credit_card = new Credit_Card;
                $credit_card->details_id  = $request->input('details_id');
                $credit_card->credit_card = $value['credit_card'];
                $credit_card->credit_card_client_percentage = $value['credit_card_client_percentage'];
                $credit_card->credit_card_partner_percentage = $value['credit_card_partner_percentage'];
                $credit_card->credit_card_market_value = $value['credit_card_market_value'];
                $credit_card->credit_card_client = $value['credit_card_client'];
                $credit_card->credit_card_partner = $value['credit_card_partner'];
               
                $credit_card->encoded_by   = $request->input('encoded_by');
                $credit_card->date_encoded = Carbon::now()->toDateString();
                $credit_card->save();
             
                    }
                
                    //  return response()->json($request->input('creditcard')); 
      
             }
            if($request->input('margin_investment_loans') !== null || $request->input('business_loans') !== null){
                $investment_related_liabilities = new Invesment_Related_Liabilities;
                $investment_related_liabilities->details_id = $request->input('details_id');
                $investment_related_liabilities->margin_investment_loans = $request->input('margin_investment_loans');
                $investment_related_liabilities->margin_investment_client_percentage = $request->input('margin_investment_client_percentage');
                $investment_related_liabilities->margin_investment_partner_percentage = $request->input('margin_investment_partner_percentage');
                $investment_related_liabilities->margin_investment_market_value = $request->input('margin_investment_market_value');
                $investment_related_liabilities->margin_investment_client = $request->input('margin_investment_client');
                $investment_related_liabilities->margin_investment_partner = $request->input('margin_investment_partner');
                $investment_related_liabilities->business_loans = $request->input('business_loans');
                $investment_related_liabilities->business_loans_client_percentage = $request->input('business_loans_client_percentage');
                $investment_related_liabilities->business_loans_partner_percentage = $request->input('business_loans_partner_percentage');
                $investment_related_liabilities->business_loans_market_value = $request->input('business_loans_market_value');
                $investment_related_liabilities->business_loans_client = $request->input('business_loans_client');
                $investment_related_liabilities->business_loans_partner = $request->input('business_loans_partner');
                $investment_related_liabilities->total_related_liabilities_market_value = $request->input('total_related_liabilities_market_value');
                $investment_related_liabilities->total_related_liabilities_client = $request->input('total_related_liabilities_client');
                $investment_related_liabilities->total_related_liabilities_partner = $request->input('total_related_liabilities_partner');
                $investment_related_liabilities->encoded_by = $request->input('encoded_by');
                $investment_related_liabilities->date_encoded = Carbon::now()->toDateString();
                $investment_related_liabilities->save();
            }
               

            foreach ($request->input('mortgageInvestment') as $value) {
                if(isset($value['mortgage_investment']) && isset($value['mortgage_investment_client_percentage']) && isset($value['mortgage_investment_partner_percentage']) && isset($value['mortgage_investment_market_value']) && isset($value['mortgage_investment_client']) && isset($value['mortgage_investment_partner']))
                    {
                $mortgage = new Mortgage_Investment_Property;
                $mortgage->details_id  = $request->input('details_id');
                $mortgage->mortgage_investment = $value['mortgage_investment'];
                $mortgage->mortgage_investment_client_percentage = $value['mortgage_investment_client_percentage'];
                $mortgage->mortgage_investment_partner_percentage = $value['mortgage_investment_partner_percentage'];
                $mortgage->mortgage_investment_market_value = $value['mortgage_investment_market_value'];
                $mortgage->mortgage_investment_client= $value['mortgage_investment_client'];
                $mortgage->mortgage_investment_partner = $value['mortgage_investment_partner'];
               
                $mortgage->encoded_by   = $request->input('encoded_by');
                $mortgage->date_encoded = Carbon::now()->toDateString();
                $mortgage->save();
             
                    }
                
                    //  return response()->json($request->input('creditcard')); 
      
            }
                if($request->input('net_assets_market_value') !== null){
                    $net_assets = new Net_Assets;
                    $net_assets->details_id = $request->input('details_id');
                    $net_assets->net_assets_market_value = $request->input('net_assets_market_value');
                    $net_assets->net_assets_client = $request->input('net_assets_client');
                    $net_assets->net_assets_partner = $request->input('net_assets_partner');
                    $net_assets->encoded_by = $request->input('encoded_by');
                    $net_assets->date_encoded = Carbon::now()->toDateString();
                    $net_assets->save();
                }
              
                if($request->input('payg_estimation_client') !== null){
                    $payg = new Payg_Estimation;
                    $payg->details_id = $request->input('details_id');
                    $payg->payg_estimation_client = $request->input('payg_estimation_client');
                    $payg->payg_estimation_partner = $request->input('payg_estimation_partner');
                    $payg->encoded_by = $request->input('encoded_by');
                    $payg->date_encoded = Carbon::now()->toDateString();
                    $payg->save();
                }
               
                if($request->input('personal_debt_rate_mortgage_rates') !== null || $request->input('personal_debt_rate_personal_loans') !== null || $request->input('personal_debt_rate_car_loans') !== null){
                    $personal_debt_rates = new Personal_Debt_Rates;
                    $personal_debt_rates->details_id = $request->input('details_id');
                    $personal_debt_rates->personal_debt_rate_mortgage_rates = $request->input('personal_debt_rate_mortgage_rates');
                    $personal_debt_rates->personal_debt_rate_years = $request->input('personal_debt_rate_years');
                    $personal_debt_rates->personal_debt_rate_personal_loans = $request->input('personal_debt_rate_personal_loans');
                    $personal_debt_rates->personal_debt_rate_personal_loans_years = $request->input('personal_debt_rate_personal_loans_years');
                    $personal_debt_rates->personal_debt_rate_car_loans = $request->input('personal_debt_rate_car_loans');
                    $personal_debt_rates->personal_debt_rate_car_loans_years = $request->input('personal_debt_rate_car_loans_years');
                    $personal_debt_rates->encoded_by = $request->input('encoded_by');
                    $personal_debt_rates->date_encoded = Carbon::now()->toDateString();
                    $personal_debt_rates->save();
                }

                if($request->input('total_liabilities_market_value') !== null || $request->input('total_liabilities_client') !== null || $request->input('total_liabilities_client') !== null){
                    $totalLibilities = new TotalLiabilities;
                    $totalLibilities->details_id = $request->input('details_id');
                    $totalLibilities->total_liabilities_market_value = $request->input('total_liabilities_market_value');
                    $totalLibilities->total_liabilities_client = $request->input('total_liabilities_client');
                    $totalLibilities->total_liabilities_partner = $request->input('total_liabilities_partner');
                    $totalLibilities->encoded_by = $request->input('encoded_by');
                    $totalLibilities->date_encoded = Carbon::now()->toDateString();
                    $totalLibilities->save();
                }
                
      
                if($request->input('investment_debt_rates') !== null || $request->input('investment_debt_rates_business_loans') !== null || $request->input('investment_debt_rates_business_loans') !== null || 
                $request->input('mortgage_existing_investment_properties') !== null || $request->input('mortgage_new_investment_properties') !== null){
                    $investment_debt_rates = new Investment_Debt_Rates;
                    $investment_debt_rates->details_id = $request->input('details_id');
                    $investment_debt_rates->investment_debt_rates = $request->input('investment_debt_rates');
                    $investment_debt_rates->investment_debt_rates_business_loans = $request->input('investment_debt_rates_business_loans');
                    $investment_debt_rates->mortgage_existing_investment_properties = $request->input('mortgage_existing_investment_properties');
                    $investment_debt_rates->mortgage_new_investment_properties = $request->input('mortgage_new_investment_properties');
                    $investment_debt_rates->encoded_by = $request->input('encoded_by');
                    $investment_debt_rates->date_encoded = Carbon::now()->toDateString();
                    $investment_debt_rates->save();
                }


               


            foreach ($request->input('personalDebtRateOtherDebt') as $value) {
                if(isset($value['personal_debt_rate_other_debts']) && isset($value['personal_debt_rate_other_debt_years']))
                    {
                        $debt_rates_other_debt = new Personal_Debt_Rate_Other_Debt;
                        $debt_rates_other_debt->details_id  = $request->input('details_id');
                        $debt_rates_other_debt->personal_debt_rate_other_debts = $value['personal_debt_rate_other_debts'];
                        $debt_rates_other_debt->personal_debt_rate_other_debt_years = $value['personal_debt_rate_other_debt_years'];
                        $debt_rates_other_debt->encoded_by   = $request->input('encoded_by');
                        $debt_rates_other_debt->date_encoded = Carbon::now()->toDateString();
                        $debt_rates_other_debt->save();
             
                    }
                
                    //  return response()->json($request->input('creditcard')); 
      
            }

            foreach ($request->input('personalDebtRatesCreditCard') as $value) {
                if(isset($value['personal_debt_rate_credit_card']) && isset($value['personal_debt_rate_credit_card']))
                    {
                        $debt_rates_credit_card = new Personal_Debt_Rate_Credit_Card;
                        $debt_rates_credit_card->details_id  = $request->input('details_id');
                        $debt_rates_credit_card->personal_debt_rate_credit_card = $value['personal_debt_rate_credit_card'];
                        $debt_rates_credit_card->personal_debt_rate_credit_card_years = $value['personal_debt_rate_credit_card_years'];
                        $debt_rates_credit_card->encoded_by   = $request->input('encoded_by');
                        $debt_rates_credit_card->date_encoded = Carbon::now()->toDateString();
                        $debt_rates_credit_card->save();
             
                    }
                
                    //  return response()->json($request->input('creditcard')); 
      
            }

            DB::commit();

             return response()->json(['Successfully saved']);
     
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['Error saving']);
        }
     }

     public function userVerifyData($id){
        try {
            $getPersonalDetails  = PersonalDetails::where('details_id',$id)->first();
            $getFinancialDetails  = FinancialIndependence::where('details_id',$id)->first();
            $getInvestmenPropertyAsset = InvestmentPropertyAsset::where('details_id',$id)->get();
            $otherPersonalAssets = Other_Personal_Assets_Non_Invesmtment::where('details_id',$id)->get();
            $getIncome = Income::where('details_id',$id)->first();
            $getNonInvestAssets = Non_Investment_Assets::where('details_id',$id)->first();
            $getSuperannuation = Superannuation::where('details_id',$id)->first();
            $getInvestmentAssets = Investment_Asset::where('details_id',$id)->first();
            $getLiabilitiesNonInvesment = Liabilities_Non_Investment::where('details_id',$id)->first();
            $getInvestmentRelatedLiabilities = Invesment_Related_Liabilities::where('details_id',$id)->first();
            $getNetAssets = Net_Assets::where('details_id',$id)->first();
            $otherDebts = Other_Debt::where('details_id',$id)->get();
            $creditCard = Credit_Card::where('details_id',$id)->get();
            $mortgageInvestment = Mortgage_Investment_Property::where('details_id',$id)->get();
            $getPaygEstimation = Payg_Estimation::where('details_id',$id)->first();
            $getPersonalDebts = Personal_Debt_Rates::where('details_id',$id)->first();
            $getPersonalOtherDebts = Personal_Debt_Rate_Other_Debt::where('details_id',$id)->get();
            $getPersonalCreditCards = Personal_Debt_Rate_Credit_Card::where('details_id',$id)->get();
            $getInvestmentDebtRates = Investment_Debt_Rates::where('details_id',$id)->first();
            $getTotalLiabilities = TotalLiabilities::where('details_id',$id)->first();
            $result = [];
                if(is_null($getPersonalDetails ) && is_null($getFinancialDetails))
                    {
                    
                    return response()->json(['status' => 'no data available']);
                    }
                    else{
                         $result = [
                            "personalDetails" => $getPersonalDetails,
                            "financialDetails" => $getFinancialDetails,
                            "InvestmentPropertyAssetDetails" => $getInvestmenPropertyAsset,
                            "IncomeDetails" => $getIncome,
                            "SuperannuationDetails" => $getSuperannuation,
                            "OtherPersonalAssets" => $otherPersonalAssets,
                            "NonInvestmentAssets" => $getNonInvestAssets,
                            "InvestmentAssets"    => $getInvestmentAssets,
                            "LiabilitiesNonInvestment" => $getLiabilitiesNonInvesment,
                            "OtherDebts" => $otherDebts,
                            "CreditCards" => $creditCard,
                            "InvestmentRelatedLiabilities" => $getInvestmentRelatedLiabilities,                     
                            "MortgageInvestmentProperty" => $mortgageInvestment,
                            "NetAssets" => $getNetAssets,
                            "PaygEstimation" => $getPaygEstimation,
                            "PersonalOtherDebts" => $getPersonalOtherDebts,
                            "PersonalDebtRates" => $getPersonalDebts,
                            "PersonalCreditCards" => $getPersonalCreditCards,
                            "InvestmentDebtRates" => $getInvestmentDebtRates,
                            "TotalLiabilitites",$getTotalLiabilities
                     ];
                        return response()->json($result);
                    }
          
           
      
    
        } catch (\Throwable $th) {
            throw $th;
        }
      
     }
    public function updatePersonalDetails(Request $request,$id)
    {
         DB::beginTransaction();
      $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'residential_address' => 'required|string|max:255',
            'phone_home'  => 'required|string|max:255',
            'phone_mobile'  => 'required|string|max:255',
            'email'  => 'required|string|max:255',
            'age_client'  => 'required|string|max:255',
            'age_partner'  => 'required|string|max:255',
            'age_average'  => 'required|string|max:255',
            'amount_per_week'  => 'required|string|max:255',
            'initial_appointment_date'  => 'required|string|max:255',
            'desired_retirement_age'  => 'required|string|max:255',
            'in_seven_years'  => 'required|string|max:255',
            'in_fourteen_years'  => 'required|string|max:255',
            'target_age'  => 'required|string|max:255',
            'years_to_target_age'  => 'required|string|max:255',
            'desired_retirement_date'  => 'required|string|max:255',
            'current_income_required_in_retirement'  => 'required|string|max:255',
        ]);

          if ($validator->fails()) {
            //  return response()->json("200");
            return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 400); // Or redirect back with error
        }
       
    
  try {
        
            $updatePD  =  PersonalDetails::where('details_id',$id)->update([
                'name' => $request->input('name'),
                'residential_address'=> $request->input('residential_address'),
                'phone_home'=> $request->input('phone_home'),
                'phone_mobile'=> $request->input('phone_mobile'),
                'email' => $request->input('email'),
                'age_client' => $request->input('age_client'),
                'age_partner' => $request->input('age_partner'),
                'age_average'=> $request->input('age_average'),
                'amount_per_week' => $request->input('amount_per_week'),
                'initial_appointment_date' => $request->input('initial_appointment_date'),
                'desired_retirement_age'=> $request->input('desired_retirement_age'),
                'in_seven_years' => $request->input('in_seven_years'),
                'in_fourteen_years' => $request->input('in_fourteen_years'),
                'in_twenty_one_years' => $request->input('in_twenty_one_years')

            
            ]);

            $updateFI = FinancialIndependence::where('details_id',$id)->update([
                'target_age' => $request->input('target_age'),
                'years_to_target_age' => $request->input('years_to_target_age'),
                'desired_retirement_date' => $request->input('desired_retirement_date'),
                'current_income_required_in_retirement' => $request->input('current_income_required_in_retirement'),
                'current_income_required_in_retirement' => $request->input('current_income_required_in_retirement')
                ]);

            $updateIncome = Income::where('details_id',$id)->update([
                'salary_frequency' => $request->input('salary_frequency'),
                'salary_client' => $request->input('salary_client'),
                'salary_partner' => $request->input('salary_partner'),
                'salary_client_annual' => $request->input('salary_client_annual'),
                'salary_partner_annual' => $request->input('salary_partner_annual'),
                'bonus_frequency' => $request->input('bonus_frequency'),
                'bonus_client' => $request->input('bonus_client'),
                'bonus_partner' => $request->input('bonus_partner'),
                'bonus_client_annual' => $request->input('bonus_client_annual'),
                'bonus_partner_annual' => $request->input('bonus_partner_annual'),
                'interest_income_frequency' => $request->input('interest_income_frequency'),
                'interest_income_client' => $request->input('interest_income_client'),
                'interest_income_partner' => $request->input('interest_income_partner'),
                'interest_income_client_annual' => $request->input('interest_income_client_annual'),
                'interest_income_partner_annual' => $request->input('interest_income_partner_annual'),
                'rental_income_frequency' => $request->input('rental_income_frequency'),
                'rental_income_client' => $request->input('rental_income_client'),
                'rental_income_partner' => $request->input('rental_income_partner'),
                'rental_income_client_annual' => $request->input('rental_income_client_annual'),
                'rental_income_partner_annual' => $request->input('rental_income_partner_annual'),
                'dividend_income_frequency' => $request->input('dividend_income_frequency'),
                'dividend_income_client' => $request->input('dividend_income_client'),
                'dividend_income_partner' => $request->input('dividend_income_partner'),
                'dividend_income_client_annual' => $request->input('dividend_income_client_annual'),
                'dividend_income_partner_annual' => $request->input('dividend_income_partner_annual'),
                'ss_income_frequency' => $request->input('ss_income_frequency'),
                'ss_income_client' => $request->input('ss_income_client'),
                'ss_income_partner' => $request->input('ss_income_partner'),
                'ss_income_client_annual' => $request->input('ss_income_client_annual'),
                'ss_income_partner_annual' => $request->input('ss_income_partner_annual'),
                'business_income_frequency' => $request->input('business_income_frequency'),
                'business_income_client' => $request->input('business_income_client'),
                'business_income_partner' => $request->input('business_income_partner'),
                'business_income_client_annual' => $request->input('business_income_client_annual'),
                'business_income_partner_annual' => $request->input('business_income_partner_annual'),
                'other_income_frequency' => $request->input('other_income_frequency'),
                'other_income_client' => $request->input('other_income_client'),
                'other_income_partner' => $request->input('other_income_partner'),
                'other_income_client_annual' => $request->input('other_income_client_annual'),
                'other_income_partner_annual' => $request->input('other_income_partner_annual'),
                'total_income_client_annual' => $request->input('total_income_client_annual'),
                'total_income_partner_annual' => $request->input('total_income_partner_annual'),
                ]);

                $updateSuperannuation = Superannuation::where('details_id',$id)->update([
                'gross_salary' => $request->input('gross_salary'),
                'sg_rate' => $request->input('sg_rate'),
                'annual_contribution' => $request->input('annual_contribution'),
                'quarterly_contribution' => $request->input('partner_gross_salary'),
                'partner_gross_salary' => $request->input('partner_gross_salary'),
                'partner_sg_rate' => $request->input('partner_sg_rate'),
                'partner_annual_contribution' => $request->input('partner_annual_contribution'),
                'partner_quarterly_contribution' => $request->input('partner_quarterly_contribution'),
                'grand_total_annual' => $request->input('grand_total_annual'),
                'grand_total_quarterly' => $request->input('grand_total_quarterly'),
              
                ]);

                $updateInvestmentDebtRates = Investment_Debt_Rates::where('details_id',$id)->update([
                'investment_debt_rates' => $request->input('investment_debt_rates'),
                'investment_debt_rates_business_loans' => $request->input('investment_debt_rates_business_loans'),
                'mortgage_existing_investment_properties' => $request->input('mortgage_existing_investment_properties'),
                'mortgage_new_investment_properties' => $request->input('mortgage_new_investment_properties')
              
                ]);

            foreach ($request->input('row') as $value) {
                if(isset($value['non_investment_owner']) && isset($value['client_percentage']) && isset($value['partner_percentage']) && isset($value['market_value']) && isset($value['client']) && isset($value['partner']) && isset($value['investment_id']))
                    {
                // $investment = new InvestmentAsset;
                // $investment->details_id   = $request->input('details_id');
                // $investment->investment_property = $value['non_investment_owner'];
                // $investment->client_percentage = $value['client_percentage'];
                // $investment->partner_percentage = $value['partner_percentage'];
                // $investment->market_value = $value['market_value'];
                // $investment->client = $value['client'];
                // $investment->partner = $value['partner'];
                // $investment->encoded_by   = $request->input('encoded_by');
                // $investment->date_encoded = Carbon::now()->toDateString();
                // $investment->save();
                
                $updateInvestment = InvestmentPropertyAsset::where('id',$value['investment_id'])->update([
                'investment_property' => $value['non_investment_owner'],
                'client_percentage' => $value['client_percentage'],
                'partner_percentage' => $value['partner_percentage'],
                'market_value' => $value['market_value'],
                'client' => $value['client'],
                'partner' => $value['partner'],
                     ]);

                
             
                    }
                //  return response()->json($request->all());
            }

                foreach ($request->input('noninvestmentasset') as $value) {
                 if(isset($value['other_personal_asset']) && isset($value['non_investment_asset_client_percentage']) && isset($value['non_investment_asset_partner_percentage']) && isset($value['non_investment_asset_market_value']) && isset($value['non_investment_asset_client']) && isset($value['non_investment_asset_partner']))
                    {
     
                $updateOtherPersonalAsset = Other_Personal_Assets_Non_Invesmtment::where('id',$value['others_id'])->update([
                'other_personal_asset' => $value['other_personal_asset'],
                'non_investment_asset_client_percentage' => $value['non_investment_asset_client_percentage'],
                'non_investment_asset_partner_percentage' => $value['non_investment_asset_partner_percentage'],
                'non_investment_asset_market_value' => $value['non_investment_asset_market_value'],
                'non_investment_asset_client' => $value['non_investment_asset_client'],
                'non_investment_asset_partner' => $value['non_investment_asset_partner'],
                     ]);

                
             
                    }
                //  return response()->json($request->all());
            }

           
               $updateNonInvestmentAssets = Non_Investment_Assets::where('details_id',$id)->update([
                'principle_residence' => $request->input('principle_residence'),
                'principle_client_percentage' => $request->input('principle_client_percentage'),
                'principle_partner_percentage' => $request->input('principle_partner_percentage'),
                'principle_market_value' => $request->input('principle_market_value'),
                'principle_client' => $request->input('principle_client'),
                'principle_partner' => $request->input('principle_partner'),
                'cash_everyday' => $request->input('cash_everyday'),
                'cash_client_percentage' => $request->input('cash_client_percentage'),
                'cash_partner_percentage' => $request->input('cash_partner_percentage'),
                'cash_market_value' => $request->input('cash_market_value'),
                'cash_client' => $request->input('cash_client'),
                'cash_partner' => $request->input('cash_partner'),
                'total_market_value' => $request->input('total_non_investment_market_value'),
                'total_client' => $request->input('total_non_investment_client'),
                'total_partner' => $request->input('total_non_investment_partner')
              
                ]);

                 $updateInvestmentAssets = Investment_Asset::where('details_id',$id)->update([
                'long_term_investment_asset' => $request->input('long_term_investment_asset'),
                'long_term_client_percentage' => $request->input('long_term_client_percentage'),
                'long_term_partner_percentage' => $request->input('long_term_partner_percentage'),
                'long_term_market_value' => $request->input('long_term_market_value'),
                'long_term_client' => $request->input('long_term_client'),
                'long_term_partner' => $request->input('long_term_partner'),
                'superannuation_client_net' => $request->input('superannuation_client_net'),
                'superannuation_client_client_percentage' => $request->input('superannuation_client_client_percentage'),
                'superannuation_client_partner_percentage' => $request->input('superannuation_client_partner_percentage'),
                'superannuation_client_market_value' => $request->input('superannuation_client_market_value'),
                'superannuation_client_client' => $request->input('superannuation_client_client'),
                'superannuation_client_partner' => $request->input('superannuation_client_partner'),
                'superannuation_partner_net' => $request->input('superannuation_partner_net'),
                'superannuation_partner_client_percentage' => $request->input('superannuation_partner_client_percentage'),
                'superannuation_partner_parnter_percentage' => $request->input('superannuation_partner_parnter_percentage'),
                'superannuation_partner_market_value' => $request->input('superannuation_partner_market_value'),
                'superannuation_partner_client' => $request->input('superannuation_partner_client'),
                'superannuation_partner_partner' => $request->input('superannuation_partner_partner'),
                'shares_fund' => $request->input('shares_fund'),
                'shares_fund_client_percentage' => $request->input('shares_fund_client_percentage'),
                'shares_fund_partner_percentage' => $request->input('shares_fund_partner_percentage'),
                'shares_fund_market_value' => $request->input('shares_fund_market_value'),
                'shares_fund_client' => $request->input('shares_fund_client'),
                'shares_fund_partner' => $request->input('shares_fund_partner'),
                'business' => $request->input('business'),
                'business_client_percentage' => $request->input('business_client_percentage'),
                'business_partner_percentage' => $request->input('business_partner_percentage'),
                'business_market_value' => $request->input('business_market_value'),
                'business_client' => $request->input('business_client'),
                'business_partner' => $request->input('business_partner'),
                'total_investment_asset_market_value' => $request->input('total_investment_asset_market_value'),
                'total_investment_asset_client' => $request->input('total_investment_asset_client'),
                'total_investment_asset_partner' => $request->input('total_investment_asset_partner'),
                'total_asset_market_value' => $request->input('total_asset_market_value'),
                'total_asset_client' => $request->input('total_asset_client'),
                'total_asset_partner' => $request->input('total_asset_partner'),
                ]);

                 $updateLiabilitiesNonInvestment = Liabilities_Non_Investment::where('details_id',$id)->update([
                'mortgage_residence' => $request->input('mortgage_residence'),
                'mortgage_client_percentage' => $request->input('mortgage_client_percentage'),
                'mortgage_partner_percentage' => $request->input('mortgage_partner_percentage'),
                'mortgage_market_value' => $request->input('mortgage_market_value'),
                'mortgage_client' => $request->input('mortgage_client'),
                'mortgage_partner' => $request->input('mortgage_partner'),
                'personal_loans' => $request->input('personal_loans'),
                'personal_loans_client_percentage' => $request->input('personal_loans_client_percentage'),
                'personal_loans_partner_percentage' => $request->input('personal_loans_partner_percentage'),
                'personal_loans_market_value' => $request->input('personal_loans_market_value'),
                'personal_loans_client' => $request->input('personal_loans_client'),
                'personal_loans_partner' => $request->input('personal_loans_partner'),
                'car_loans' => $request->input('car_loans'),
                'car_loans_client_percentage' => $request->input('car_loans_client_percentage'),
                'car_loans_partner_percentage' => $request->input('car_loans_partner_percentage'),
                'car_loans_market_value' => $request->input('car_loans_market_value'),
                'car_loans_client' => $request->input('car_loans_client'),
                'car_loans_partner' => $request->input('car_loans_partner'),
                'total_non_invesment_liabilities_market_value' => $request->input('total_non_invesment_liabilities_market_value'),
                'total_non_invesment_liabilities_client' => $request->input('total_non_invesment_liabilities_client'),
                'total_non_invesment_liabilities_partner' => $request->input('total_non_invesment_liabilities_partner')
              
                ]);

            foreach ($request->input('debt') as $value) {
                if(isset($value['other_debt']) && isset($value['other_debt_client_percentage']) && isset($value['other_debt_partner_percentage']) && isset($value['other_debt_market_value']) && isset($value['other_debt_client']) && isset($value['other_debt_parnter']))
                    {
                        $updateOtherDebt = Other_Debt::where('id',$value['other_debt_id'])->update([
                        'other_debt' => $value['other_debt'],
                        'other_debt_client_percentage' => $value['other_debt_client_percentage'],
                        'other_debt_partner_percentage' => $value['other_debt_partner_percentage'],
                        'other_debt_market_value' => $value['other_debt_market_value'],
                        'other_debt_client' => $value['other_debt_client'],
                        'other_debt_parnter' => $value['other_debt_parnter'],
                     ]);
             
                    }
                
                    //   return response()->json($request->all()); 
      
             }

              foreach ($request->input('creditcard') as $value) {
                if(isset($value['credit_card']) && isset($value['credit_card_client_percentage']) && isset($value['credit_card_partner_percentage']) && isset($value['credit_card_market_value']) && isset($value['credit_card_client']) && isset($value['credit_card_partner']))
                    {
                     $updateCreditCard = Credit_Card::where('id',$value['credit_card_id'])->update([
                        'credit_card' => $value['credit_card'],
                        'credit_card_client_percentage' => $value['credit_card_client_percentage'],
                        'credit_card_partner_percentage' => $value['credit_card_partner_percentage'],
                        'credit_card_market_value' => $value['credit_card_market_value'],
                        'credit_card_client' => $value['credit_card_client'],
                        'credit_card_partner' => $value['credit_card_partner'],
                     ]);
             
                    }
                
                    //   return response()->json($request->all()); 
      
             }

            foreach ($request->input('mortgageInvestment') as $value) {
                if(isset($value['mortgage_investment']) && isset($value['mortgage_investment_client_percentage']) && isset($value['mortgage_investment_partner_percentage']) && isset($value['mortgage_investment_market_value']) && isset($value['mortgage_investment_client']) && isset($value['mortgage_investment_partner']))
                    {
               
                 $updateMortgage = Mortgage_Investment_Property::where('id',$value['mortgage_investment_id'])->update([
                        'mortgage_investment' => $value['mortgage_investment'],
                        'mortgage_investment_client_percentage' => $value['mortgage_investment_client_percentage'],
                        'mortgage_investment_partner_percentage' => $value['mortgage_investment_partner_percentage'],
                        'mortgage_investment_market_value' => $value['mortgage_investment_market_value'],
                        'mortgage_investment_client' => $value['mortgage_investment_client'],
                        'mortgage_investment_partner' => $value['mortgage_investment_partner'],
                     ]);
             
                    }
                
                    //  return response()->json($request->input('creditcard')); 
      
            }

            foreach ($request->input('personalDebtRateOtherDebt') as $value) {
                if(isset($value['personal_debt_rate_other_debts']) && isset($value['personal_debt_rate_other_debt_years']))
                    {
               
                         $updatedebtRates= Personal_Debt_Rate_Other_Debt::where('id',$value['debt_rates_other_id'])->update([
                        'personal_debt_rate_other_debts' => $value['personal_debt_rate_other_debts'],
                        'personal_debt_rate_other_debt_years' => $value['personal_debt_rate_other_debt_years'],
                        
                         ]);
             
                    }
                
                    //  return response()->json($request->input('creditcard')); 
      
            }

            foreach ($request->input('personalDebtRatesCreditCard') as $value) {
                if(isset($value['personal_debt_rate_credit_card']) && isset($value['personal_debt_rate_credit_card_years']))
                    {
               
                         $updateDebtCreditCard = Personal_Debt_Rate_Credit_Card::where('id',$value['debt_rates_credit_card_id'])->update([
                        'personal_debt_rate_credit_card' => $value['personal_debt_rate_credit_card'],
                        'personal_debt_rate_other_debt_years' => $value['personal_debt_rate_other_debt_years'],
                        
                         ]);
             
                    }
                
                    //  return response()->json($request->input('creditcard')); 
      
            }

               $updateInvestmentRelatedLiabilities = Invesment_Related_Liabilities::where('details_id',$id)->update([
                'margin_investment_loans' => $request->input('margin_investment_loans'),
                'margin_investment_client_percentage' => $request->input('margin_investment_client_percentage'),
                'margin_investment_partner_percentage' => $request->input('margin_investment_partner_percentage'),
                'margin_investment_market_value' => $request->input('margin_investment_market_value'),
                'margin_investment_client' => $request->input('margin_investment_client'),
                'margin_investment_partner' => $request->input('margin_investment_partner'),
                'business_loans' => $request->input('business_loans'),
                'business_loans_client_percentage' => $request->input('business_loans_client_percentage'),
                'business_loans_partner_percentage' => $request->input('business_loans_partner_percentage'),
                'business_loans_market_value' => $request->input('business_loans_market_value'),
                'business_loans_client' => $request->input('business_loans_client'),
                'business_loans_partner' => $request->input('business_loans_partner'),
           
                'total_related_liabilities_market_value' => $request->input('total_related_liabilities_market_value'),
                'total_related_liabilities_client' => $request->input('total_related_liabilities_client'),
                'total_related_liabilities_partner' => $request->input('total_related_liabilities_partner')
              
                ]);

               $updateNetAssets = Net_Assets::where('details_id',$id)->update([
                'net_assets_market_value' => $request->input('net_assets_market_value'),
                'net_assets_client' => $request->input('net_assets_client'),
                'net_assets_partner' => $request->input('net_assets_partner'),
              
              
                ]);

                $updateTotalLiabilities = TotalLiabilities::where('details_id',$id)->update([
                'total_liabilities_market_value' => $request->input('total_liabilities_market_value'),
                'total_liabilities_client' => $request->input('total_liabilities_client'),
                'total_liabilities_partner' => $request->input('total_liabilities_partner'),
              
              
                ]);

                $updatePayg = Payg_Estimation::where('details_id',$id)->update([
                'payg_estimation_client' => $request->input('payg_estimation_client'),
                'payg_estimation_partner' => $request->input('payg_estimation_partner'),
                
              
              
                ]);

                $updatedebtrates = Personal_Debt_Rates::where('details_id',$id)->update([
                'personal_debt_rate_mortgage_rates' => $request->input('personal_debt_rate_mortgage_rates'),
                'personal_debt_rate_years' => $request->input('personal_debt_rate_years'),
                'personal_debt_rate_personal_loans' => $request->input('personal_debt_rate_personal_loans'),
                'personal_debt_rate_personal_loans_years' => $request->input('personal_debt_rate_personal_loans_years'),
                'personal_debt_rate_car_loans' => $request->input('personal_debt_rate_car_loans'),
                'personal_debt_rate_car_loans_years' => $request->input('personal_debt_rate_car_loans_years'),
                
              
              
                ]);
         
        DB::commit();
            return response()->json(['Changes Applied!']);
            // return response()->json($request->all());
        } catch (Exception $e) {
            return response()->json(['Error saving']);
        }
     }

     public function getClientCollection(Request $request){
        $collection = PersonalDetails::orderBy('name')->get();
         if ($request->ajax()) {
        return response()->json($collection);
    }

    return view('list.customerlist', [
       'proc' => $collection
    ]);
        // return response()->json($collection);
     }

}
