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
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'residential_address' => 'required',
        //     'phone_home'  => 'required',
        //     'phone_mobile'  => 'required',
        //     'email'  => 'required',
        //     'age_client'  => 'required',
        //     'age_partner'  => 'required',
        //     'age_average'  => 'required',
        //     'amount_per_week'  => 'required',
        //     'initial_appointment_date'  => 'required',
        // ]);

        //   if ($validator->fails()) {
        //     return response()->json(['Please fix the errors below.']);
        // }
        // else{
 try {
        
            $save  = new PersonalDetails;
      
            $save->user_id    = $request->input('user_id');
            $save->details_id = uniqid();
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
            $save->date_encoded = Carbon::now()->toDateString();
            $save->save();
            return response()->json(['Successfully saved']);
            // return response()->json($request->all());
        } catch (Exception $e) {
            return response()->json(['Error saving']);
        }
        //}

       
    }
}
