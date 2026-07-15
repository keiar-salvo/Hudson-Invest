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
            //  return response()->json("200");
            return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 400); // Or redirect back with error
        }
       
    
  try {
        
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

            return response()->json(['Successfully saved']);
            // return response()->json($request->all());
        } catch (Exception $e) {
            return response()->json(['Error saving']);
        }
     }

     public function userVerifyData($id){
        try {
            $getPersonalDetails  = PersonalDetails::where('details_id',$id)->first();
            $getFinancialDetails  = FinancialIndependence::where('details_id',$id)->first();
            $result = [];
                if(is_null($getPersonalDetails ) && is_null($getFinancialDetails))
                    {
                    
         return response()->json(['status' => 'no data available']);
                    }
                    else{
                         $result = [
                            "personalDetails" => $getPersonalDetails,
                            "financialDetails" => $getFinancialDetails
                     ];
                        return response()->json($result);
                    }
          
           
      
    
        } catch (\Throwable $th) {
            throw $th;
        }
      
     }
    public function updatePersonalDetails(Request $request,$id)
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
      
         
            // $save->name   = $request->input('name');
            // $save->residential_address   = $request->input('residential_address');
            // $save->phone_home  = $request->input('phone_home');
            // $save->phone_mobile  = $request->input('phone_mobile');
            // $save->email     = $request->input('email');
            // $save->age_client   = $request->input('age_client');
            // $save->age_partner   = $request->input('age_partner');
            // $save->age_average   = $request->input('age_average');
            // $save->amount_per_week   = $request->input('amount_per_week');
            // $save->initial_appointment_date   = $request->input('initial_appointment_date');
            // $save->desired_retirement_age   = $request->input('desired_retirement_age');
     
            // $save->in_seven_years   = $request->input('in_seven_years');
            // $save->in_fourteen_years   = $request->input('in_fourteen_years');
            // $save->in_twenty_one_years   = $request->input('in_twenty_one_years');
            // $save->date_encoded = Carbon::now()->toDateString();
            // $save->save();

            // $financeData = FinancialIndependence::find($id);
            // $financeData->user_id = $request->input('user_id');
            // $financeData->financial_id = uniqid();
            // $financeData->target_age = $request->input('target_age');
            // $financeData->years_to_target_age = $request->input('years_to_target_age');
            // $financeData->desired_retirement_date = $request->input('desired_retirement_date');
            // $financeData->current_income_required_in_retirement= $request->input('current_income_required_in_retirement');
            // $financeData->date_encoded = Carbon::now()->toDateString();
            // $financeData->save();

            return response()->json(['Changes saved!']);
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
