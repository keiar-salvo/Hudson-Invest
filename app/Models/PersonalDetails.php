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
                $investment = new InvestmentAsset;
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

            $supperannuation = new Superannuation;
            $supperannuation->details_id = $request->input('details_id');
            $supperannuation->gross_salary = $request->input('gross_salary');
            $supperannuation->sg_rate = $request->input('sg_rate');
            $supperannuation->annual_contribution = $request->input('annual_contribution');
            $supperannuation->quarterly_contribution = $request->input('quarterly_contribution');
            $supperannuation->encoded_by   = $request->input('encoded_by');
            $supperannuation->date_encoded = Carbon::now()->toDateString();
            $supperannuation->save();

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
            $non_investment_asset->encoded_by   = $request->input('encoded_by');
            $non_investment_asset->date_encoded = Carbon::now()->toDateString();
            $non_investment_asset->save();

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
            $getInvestAsset = InvestmentAsset::where('details_id',$id)->get();
            $otherPersonalAssets = Other_Personal_Assets_Non_Invesmtment::where('details_id',$id)->get();
            $getIncome = Income::where('details_id',$id)->first();
            $getNonInvestAssets = Non_Investment_Assets::where('details_id',$id)->first();
            $getSuperannuation = Superannuation::where('details_id',$id)->first();
            $result = [];
                if(is_null($getPersonalDetails ) && is_null($getFinancialDetails))
                    {
                    
                    return response()->json(['status' => 'no data available']);
                    }
                    else{
                         $result = [
                            "personalDetails" => $getPersonalDetails,
                            "financialDetails" => $getFinancialDetails,
                            "InvestmentAssetDetails" => $getInvestAsset,
                            "IncomeDetails" => $getIncome,
                            "SuperannuationDetails" => $getSuperannuation,
                            "OtherPersonalAssets" => $otherPersonalAssets,
                            "NonInvestmentAssets" => $getNonInvestAssets                           
                    
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
                'quarterly_contribution' => $request->input('quarterly_contribution')
              
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
                
                $updateInvestment = InvestmentAsset::where('id',$value['investment_id'])->update([
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
                'cash_partner' => $request->input('cash_partner')
              
                ]);
            
         
        DB::commit();
            return response()->json(['Investment Asssets changes saved!']);
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
