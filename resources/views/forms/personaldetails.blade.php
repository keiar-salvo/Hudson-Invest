@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>Forms / Client Details</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form  method="POST" id="" class="clientdetails">
          
        	@method('POST')
        <fieldset class="group-box">
               <legend class="group-title">Personal Details</legend>
               <input type="text" name="_token" id="token" value="{{ csrf_token() }}" style="display:none;">
        <input type="text" class="mt-1 form-input details_id"  name="details_id" value="" style="display:none;">
        <input type="text" class="mt-1 form-input encoded_by"  name="encoded_by" value="{{ session('name') }}" style="display:none;">
       
  <!-- Grid Container: 1 column on mobile, 6 equal columns on desktop -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
  
    <div class="col-span-1 md:col-span-3">
      <label >Name</label>
      <input type="text" class="mt-1 form-input name" name="name" id="">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Residential Address</label>
      <input type="text" class="mt-1 form-input residential_address" name="residential_address" id="">
    </div>





    <div class="col-span-1 md:col-span-3">
      <label >Phone (Home)</label>
      <input type="text" class="mt-1 form-input phone_home" name="phone_home" id="">
    </div>
    <div>
       <label >Phone (Mobile)</label>
      <input type="text" class="mt-1 form-input phone_mobile" name="phone_mobile" id="">
    </div>


    <div class="col-span-1 md:col-span-2">
      <label >Email</label>
      <input type="text" class="mt-1 form-input email" name="email" id="">
    </div>

  
    <div class="col-span-1 md:col-span-1">
      <label >Age (Client)</label>
      <input type="text" class="mt-1 form-input age_client" name="age_client" id="">
    </div>

    <div class="col-span-1 md:col-span-1">
      <label >Age (Partner)</label>
      <input type="text" class="mt-1 form-input age_partner" name="age_partner" id="">
    </div>

    <div class="col-span-1 md:col-span-1">
      <label>Age (Average)</label>
      <input type="text" class="mt-1 form-input age_average" name="age_average" id="">
    </div>

    <div class="col-span-1 md:col-span-1">
      <label>Amount per week to contribute to Property</label>
      <input type="text" class="mt-1 form-input amount_per_week" name="amount_per_week" id="">
    </div>
    <!-- Submit Button: Spans full width -->
    <div class="col-span-1 md:col-span-6 text-right mt-2">
     
    </div>
     
  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
	<div>
		<!-- <label style=" color: #bd0c1d">Initial Appointment Date</label> -->
  
      <label>Initial Appointment Date</label>
		<input type="date" lang="en-AU"  class="form-input initial_appointment_date"   required="" style="margin-top:4px;" name="initial_appointment_date">
	</div>
  
  <div >
  
   <label>Desired Retirement Age</label>
    <input type="text"  class="mt-1 form-input desired_retirement_age"  placeholder="mm/dd/yyyy" name="desired_retirement_age" id="">
  </div>
  <div >
    <label>In 7 years</label>
    <input type="text"  class="mt-1 form-input in_seven_years"  placeholder="mm/dd/yyyy" name="in_seven_years" id="">
  </div>
   <div >
    <label>In 14 years</label>
    <input type="text"  class="mt-1 form-input in_fourteen_years"  placeholder="mm/dd/yyyy" name="in_fourteen_years" >
  </div>
  <div >
    <label>In 21 years</label>
    <input type="text"  class="mt-1 form-input in_twenty_one_years"  placeholder="mm/dd/yyyy" name="in_twenty_one_years" >
  </div>

</div>

    </fieldset>
   <fieldset class="group-box">
               <legend class="group-title">Financial Independence</legend>
      

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
  
    <div class="col-span-1 md:col-span-3">
      <label>Target Age</label>
      <input type="text" class="mt-1 form-input target_age" name = "target_age">
    </div>

   
    <div class="col-span-1 md:col-span-3">
      <label >Years to Target Age</label>
      <input type="text" class="mt-1 form-input years_to_target_age" name="years_to_target_age">
    </div>


  <div class="col-span-1 md:col-span-6">
      <label>Desired Retirement Date</label>

<input  type="text" name="desired_retirement_date" class="form-input desired_retirement_date"   required="" style="margin-top:4px;">

                                              
    </div>
  



    <!-- City: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label >% Current Income Required In Retirement</label>
      <input type="text" class="mt-1 form-input current_income_required_in_retirement" name= "current_income_required_in_retirement">
    </div>

 
     
  </div>
    </fieldset>
    
  <fieldset class="group-box">
               <legend class="group-title">Income</legend>

<div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Salary</label>
    <select  id="salary_frequency" name="salary_frequency" class="salary_frequency' block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
    <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input salary_client"  placeholder="0.00" name="salary_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input salary_partner"  placeholder="0.00" name="salary_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input salary_client_annual"  placeholder="0.00" name="salary_client_annual">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input salary_partner_annual"  placeholder="0.00" name="salary_partner_annual">
  </div>


     
  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Bonus / Commission</label>
    <select  id="bonus_frequency" name="bonus_frequency" class="bonus_frequency block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
    <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input bonus_client"  placeholder="0.00" name="bonus_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input bonus_partner"  placeholder="0.00" name="bonus_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input bonus_client_annual"  placeholder="0.00" name="bonus_client_annual">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input bonus_partner_annual"  placeholder="0.00" name="bonus_partner_annual">
  </div>


     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
   <label style=" color: #bd0c1d">Inerest Income</label>
    <select  id="interest_income_frequency" name="interest_income_frequency" class="interest_income_frequency block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
   <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input interest_income_client"  placeholder="0.00" name="interest_income_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input interest_income_partner"  placeholder="0.00" name="interest_income_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input interest_income_client_annual"  placeholder="0.00" name="interest_income_client_annual">
  </div>

  <div>
  <label>Partner Annual</label>
    <input type="text" class="mt-1 form-input interest_income_partner_annual"  placeholder="0.00" name="interest_income_partner_annual">
  </div>

   
     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Rental Income</label>
    <select  id="rental_income_frequency" name="rental_income_frequency" class="rental_income_frequency block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
    <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input rental_income_client"  placeholder="0.00" name="rental_income_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input rental_income_partner"  placeholder="0.00" name="rental_income_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input rental_income_client_annual"  placeholder="0.00" name="rental_income_client_annual">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input rental_income_partner_annual"  placeholder="0.00" name="rental_income_partner_annual">
  </div>


     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Dividend Income</label>
    <select  id="dividend_income_frequency" name="dividend_income_frequency" class="dividend_income_frequency block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
    <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input dividend_income_client"  placeholder="0.00" name="dividend_income_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input dividend_income_partner"  placeholder="0.00" name="dividend_income_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input dividend_income_client_annual"  placeholder="0.00" name="dividend_income_client_annual">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input dividend_income_partner_annual"  placeholder="0.00" name="dividend_income_partner_annual">
  </div>


     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
 <label style=" color: #bd0c1d">Social Security Income</label>
    <select  id="ss_income_frequency" name="ss_income_frequency" class="ss_income_frequency block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
    <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input ss_income_client"  placeholder="0.00" name="ss_income_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input ss_income_partner"  placeholder="0.00" name="ss_income_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input ss_income_client_annual"  placeholder="0.00" name="ss_income_client_annual">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input ss_income_partner_annual"  placeholder="0.00" name="ss_income_partner_annual">
  </div>

  
     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Business Income</label>
    <select  id="business_income_frequency" name="business_income_frequency" class="business_income_frequency block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
     <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input business_income_client"  placeholder="0.00" name="business_income_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input business_income_partner"  placeholder="0.00" name="business_income_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input business_income_client_annual"  placeholder="0.00" name="business_income_client_annual">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input business_income_partner_annual"  placeholder="0.00" name="business_income_partner_annual">
  </div>
     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
   <label style=" color: #bd0c1d">Other Income</label>
    <select  id="other_income_frequency" name="other_income_frequency" class="other_income_frequency block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
    <option value="Weekly">Weekly</option>
    <option value="Fortnightly">Fortnightly</option>
    <option value="Monthly">Monthly</option>
    <option value="Annual">Annual</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input other_income_client"  placeholder="0.00" name="other_income_client">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input other_income_partner"  placeholder="0.00" name="other_income_partner">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input other_income_client_annual"  placeholder="0.00" name="other_income_client_annual">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input other_income_partner_annual"  placeholder="0.00" name="other_income_partner_annual">
  </div>

     
  </div>
    <br/>
  <!-- <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Business Income</label>
    <select  id="frequency" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Frequency</option>
    <option value="weekly">Weekly</option>
    <option value="fortnightly">Fortnightly</option>
    <option value="monthly">Monthly</option>
    <option value="annual">Monthly</option>
  </select>
  </div>
  
  <div>
   <label >Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

  <div>
   <label >Partner</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0.00">
  </div>

  <div>
   <label >Client Annual</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

  <div>
   <label >Partner Annual</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div> -->
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
   <label style=" color: #bd0c1d">Total Income</label>
   <label>Client Annual</label>
<input type="text"  class="mt-1 form-input total_income_client_annual"  placeholder="0.00" name="total_income_client_annual">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Partner Annual</label>
    <input type="text"  class="mt-1 form-input total_income_partner_annual"  placeholder="0.00" name="total_income_partner_annual">
  </div>
  </div>
    </fieldset>
     <fieldset class="group-box">
        <legend class="group-title">Superannuation Contributions</legend>
      

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Gross Salary</label>
      <input type="text" class="mt-1 form-input gross_salary" name ="gross_salary">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >SG Rate</label>
      <input type="text" class="mt-1 form-input sg_rate" placeholder="0%" name="sg_rate">
    </div>


    <div class="col-span-1 md:col-span-6">
      <label >Annual Contribution</label>
      <input type="email" class="mt-1 form-input annual_contribution" name="annual_contribution">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >Quarterly Contribution</label>
      <input type="text" class="mt-1 form-input quarterly_contribution" name="quarterly_contribution">
 

    <div class="col-span-1 md:col-span-6 text-right mt-2">
     
    </div>
     
  </div>
     </div>
        <div class="w-full ">
   <label class="w-full text-gray-700 font-medium"><i>Note: The maximum SG that an employer is required to contribute is $5,312.50 per quarter (that is $20,351.40 SG for the year).</i></label>
</div>
    </fieldset>

    <fieldset class="group-box">
        <legend class="group-title">Summary of Assets and Liabilities</legend>
      

  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label style=" color: #bd0c1d">Assets (Non-Investment)</label>
       <label >Principle Residence</label>
    <select  id="principle_residence" name="principle_residence" class="principle_residence block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:23px;">
   <label >Client Percentage</label>
    <input type="text" name="principle_client_percentage" class="mt-1 form-input principle_client_percentage"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Partner Percentage</label>
    <input type="email" name="principle_partner_percentage" class="mt-1 form-input principle_partner_percentage"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Market Value</label>
    <input type="tel"  name="principle_market_value" class="mt-1 form-input principle_market_value"  placeholder="0.00">
  </div>

 <div style="margin-top:23px;">
   <label >Client </label>
    <input type="text" name="principle_client" class="mt-1 form-input principle_client"  placeholder="0.00">
  </div>
  <div style="margin-top:23px;">
   <label >Partner</label>
    <input type="text" name="principle_partner" class="mt-1 form-input principle_partner"  placeholder="0.00">
  </div>
 
  </div>
    
  <br/>

  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Cash (everyday)</label>
    <select  id="cash_everyday" name="cash_everyday" class="cash_everyday block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
   <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  name="cash_client_percentage" class="mt-1 form-input cash_client_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email" name="cash_partner_percentage" class="mt-1 form-input cash_partner_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input cash_market_value" name="cash_market_value" placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input cash_client" name="cash_client" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input cash_partner" name="cash_partner"  placeholder="0.00">
  </div>

  </div>
 
<br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Other Personal Assets 1</label>
    <select  id="non-investment-owner-asset" name="noninvestmentasset[0][other_personal_asset] "class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select non-investment-owner-asset ">
   <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input non_investment_asset_client_percentage"  placeholder="0%" name="noninvestmentasset[0][non_investment_asset_client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input non_investment_asset_partner_percentage"  name="noninvestmentasset[0][non_investment_asset_partner_percentage]" placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input non_investment_asset_market_value" name="noninvestmentasset[0][non_investment_asset_market_value]"  placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input non_investment_asset_client"  name="noninvestmentasset[0][non_investment_asset_client]" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input non_investment_asset_partner" name="noninvestmentasset[0][non_investment_asset_partner]"  placeholder="0.00">
  </div>
<div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input others_id" name="noninvestmentasset[0][others_id]"  placeholder="0.00">
  </div>


  </div>
  <br/>
  <div class="div-non-investment-property"></div>
     <button class="btn btn-info add-non-investment-property" style="width:50px;">Add</button>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
  <div>
   <label style=" color: #bd0c1d">Total Non-Investment Assets</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input total_non_investment_market_value"  placeholder="0.00" name="total_non_investment_market_value">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  name="total_non_investment_client" class="mt-1 form-input total_non_investment_client"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  name="total_non_investment_partner" class="mt-1 form-input total_non_investment_partner"  placeholder="0.00">
  </div>
</div>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  <br/>
    <label style=" color: #bd0c1d">Investment Asset</label>
       <label >Long-term Savings,Term Deposits,Bonds</label>
    <select  id="long_term_investment_asset" name="long_term_investment_asset" class="long_term_investment_asset block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:66px;">
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input long_term_client_percentage" name="long_term_client_percentage" placeholder="0%">
  </div>

 <div style="margin-top:66px;">
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input long_term_partner_percentage" name="long_term_partner_percentage"  placeholder="0%">
  </div>

 <div style="margin-top:66px;">
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input long_term_market_value" name="long_term_market_value" placeholder="0.00">
  </div>

 <div style="margin-top:66px;">
   <label >Client </label>
    <input type="text" class="mt-1 form-input long_term_client" name="long_term_client" placeholder="0.00">
  </div>
  <div style="margin-top:66px;">
   <label >Partner</label>
    <input type="text" class="mt-1 form-input long_term_partner" name="long_term_partner" placeholder="0.00">
  </div>

  </div>
<br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Superannuation- Client (net)</label>
    <select  id="superannuation_client_net" name="superannuation_client_net" class="superannuation_client_net block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input superannuation_client_client_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input superannuation_client_partner_percentage" name="superannuation_client_partner_percentage" placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input superannuation_client_market_value" name="superannuation_client_market_value"  placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input superannuation_client_client" name="superannuation_client_client"  placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input superannuation_client_partner" name="superannuation_client_partner" placeholder="0.00">
  </div>
</div>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Superannuation- Partner (net)</label>
    <select  id="superannuation_partner_net" name="superannuation_partner_net" class="superannuation_partner_net block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input superannuation_partner_client_percentage" name="superannuation_partner_client_percentage" placeholder="0%">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input superannuation_partner_parnter_percentage" name="superannuation_partner_parnter_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input superannuation_partner_market_value" name="superannuation_partner_market_value" placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input superannuation_partner_client" name="superannuation_partner_client" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input superannuation_partner_partner" name="superannuation_partner_partner" placeholder="0.00">
  </div>
</div>

<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Shares/Managed Funds</label>
    <select  id="shares_fund" name="shares_fund" class="shares_fund block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input shares_fund_client_percentage" name="shares_fund_client_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input shares_fund_partner_percentage" name="shares_fund_partner_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input shares_fund_market_value" name="shares_fund_market_value" placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input shares_fund_client" name="shares_fund_client" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input shares_fund_partner" name="shares_fund_partner" placeholder="0.00">
  </div>
</div>
  
<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Business</label>
    <select  id="business" name="business" class="business block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input business_client_percentage" name="business_client_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input business_partner_percentage" name="business_partner_percentage"  placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input business_market_value" name="business_market_value" placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input business_client" name="business_client" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input business_partner" name="business_partner"  placeholder="0.00">
  </div>
</div>
  <br/>
  <!-- <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6" >

<div>
    <label>Investment Property 1</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
</div> -->

<!-- <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Investment Property 2</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
</div> -->

<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Investment Property 1</label>
    <select name="row[0][non_investment_owner]"  id="non-investment-owner" class="investment_property block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input client_percentage"  placeholder="0%" name="row[0][client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input partner_percentage"  placeholder="0%" name="row[0][partner_percentage]">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input market_value"   placeholder="0.00" name="row[0][market_value]">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input client"  placeholder="0.00" name="row[0][client]">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input partner"  placeholder="0.00" name="row[0][partner]">
  </div>
     <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input investment_id"  placeholder="0.00" name="row[0][investment_id]">
  </div>

  <div>



    
  </div>
  </div>
  
    <div class="investment-property grid"></div>
    <button class="btn btn-info add-investment-property" style="width:50px;">Add</button>

<br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Investment Assets</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input total_investment_asset_market_value" name="total_investment_asset_market_value"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input total_investment_asset_client" name="total_investment_asset_client"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input total_investment_asset_partner" name="total_investment_asset_partner" placeholder="0.00">
  </div>

</div>
     <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Assets</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input total_asset_market_value" name="total_asset_market_value" placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input total_asset_client" name="total_asset_client"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input total_asset_partner" name="total_asset_partner" placeholder="0.00">
  </div>

</div>
<br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label style=" color: #bd0c1d">Liabilities (Non-Investment)</label>
       <label >Mortgage - Principle Residence</label>
    <select  id="mortgage_residence" name="mortgage_residence" class="mortgage_residence block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
     <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:23px;">
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input mortgage_client_percentage" name="mortgage_client_percentage" placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input mortgage_partner_percentage" name="mortgage_partner_percentage"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input mortgage_market_value" name="mortgage_market_value"  placeholder="0.00">
  </div>

 <div style="margin-top:23px;">
   <label >Client </label>
    <input type="text" class="mt-1 form-input mortgage_client" name="mortgage_client"  placeholder="0.00">
  </div>
  <div style="margin-top:23px;">
   <label >Partner</label>
    <input type="text" class="mt-1 form-input mortgage_partner" name="mortgage_partner" placeholder="0.00">
  </div>

  </div>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  
       <label >Personal Loans</label>
    <select  id="personal_loans" name="personal_loans" class="personal_loans block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input personal_loans_client_percentage" name="personal_loans_client_percentage"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input personal_loans_partner_percentage" name="personal_loans_partner_percentage" placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input personal_loans_market_value" name="personal_loans_market_value" placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input personal_loans_client" name="personal_loans_client"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input personal_loans_partner" name="personal_loans_partner" placeholder="0.00">
  </div>

  </div>
  <br/>
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  
       <label >Car Loans</label>
    <select  id="car_loans" name="car_loans" class="car_loans block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input car_loans_client_percentage" name="car_loans_client_percentage"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input car_loans_partner_percentage" name="car_loans_partner_percentage"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input car_loans_market_value" name="car_loans_market_value"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input car_loans_client" name="car_loans_client"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input car_loans_partner" name="car_loans_partner" placeholder="0.00">
  </div>

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

  <div>
    <label >Other Debt 1</label>
    <select  id="other_debt" name="debt[0][other_debt] "class="other_debt block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input other_debt_client_percentage" name="debt[0][other_debt_client_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input other_debt_partner_percentage" name="debt[0][other_debt_partner_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input other_debt_market_value" name="debt[0][other_debt_market_value]"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input other_debt_client" name="debt[0][other_debt_client]" placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input other_debt_parnter" name="debt[0][other_debt_parnter]"  placeholder="0.00">
  </div>

   <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input other_debt_id" name="debt[0][other_debt_id]"  placeholder="0.00" >
  </div>

  </div>

  <div class="div-add-debt" style="padding-bottom:20px;"></div>
 
     <button class="btn btn-info add-debt" style="width:50px;">Add</button>

 
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
       <label >Credit Card 1 <i style="font-weight:normal;font-size:12px;">(If paid in full leave blank)</i></label></label>
    <select  id="credit_card" name="creditcard[0][credit_card]" class="credit_card block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input credit_card_client_percentage" name="creditcard[0][credit_card_client_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input credit_card_partner_percentage" name="creditcard[0][credit_card_partner_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input credit_card_market_value" name="creditcard[0][credit_card_market_value]"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input credit_card_client" name="creditcard[0][credit_card_client]"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input credit_card_partner" name="creditcard[0][credit_card_partner]"  placeholder="0.00">
  </div>
    <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input credit_card_id" name="creditcard[0][credit_card_id]"  placeholder="0.00">
  </div>

  </div>
  <div class="div-add-credit-card"></div>
    <br/>
     <button class="btn btn-info add-credit-card" style="width:50px;">Add</button>

  
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Non-Investment Liabilities</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input total_non_invesment_liabilities_market_value" name="total_non_invesment_liabilities_market_value"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input total_client total_non_invesment_liabilities_client" name="total_non_invesment_liabilities_client" placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input total_non_invesment_liabilities_partner" name="total_non_invesment_liabilities_partner"  placeholder="0.00">
  </div>

</div>
<br/>
 <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label style=" color: #bd0c1d">Investment Related Liabilities</label>
       <label >Margin/Investment Loans</label>
    <select  id="margin_investment_loans" name="margin_investment_loans" class="margin_investment_loans block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:23px;">
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input margin_investment_client_percentage" name="margin_investment_client_percentage" placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input margin_investment_partner_percentage" name="margin_investment_partner_percentage"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input margin_investment_market_value" name="margin_investment_market_value"  placeholder="0.00">
  </div>

 <div style="margin-top:23px;">
   <label >Client </label>
    <input type="text" class="mt-1 form-input margin_investment_client" name="margin_investment_client" placeholder="0.00">
  </div>
  <div style="margin-top:23px;">
   <label >Partner</label>
    <input type="text" class="mt-1 form-input margin_investment_partner" name="margin_investment_partner" placeholder="0.00">
  </div>

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
 
       <label >Business Loans</label>
    <select  id="business_loans" name="business_loans" class="business_loans block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input business_loans_client_percentage" name="business_loans_client_percentage" placeholder="0%">
  </div>

 <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input business_loans_partner_percentage" name="business_loans_partner_percentage"  placeholder="0%">
  </div>

 <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input business_loans_market_value" name="business_loans_market_value" placeholder="0.00">
  </div>

 <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input business_loans_client" name="business_loans_client"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input business_loans_partner" name="business_loans_partner" placeholder="0.00">
  </div>

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
 
       <label >Mortgage - Investment Property 1</label>
    <select  id="mortgage_investment" name="mortgageInvestment[0][mortgage_investment]" class="mortgage_investment block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input mortgage_investment_client_percentage" name="mortgageInvestment[0][mortgage_investment_client_percentage]"  placeholder="0%">
  </div>

 <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input mortgage_investment_partner_percentage" name="mortgageInvestment[0][mortgage_investment_partner_percentage]" placeholder="0%">
  </div>

 <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input mortgage_investment_market_value" name="mortgageInvestment[0][mortgage_investment_market_value]" placeholder="0.00">
  </div>

 <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input mortgage_investment_client" name="mortgageInvestment[0][mortgage_investment_client]"   placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input mortgage_investment_partner" name="mortgageInvestment[0][mortgage_investment_partner]" placeholder="0.00">
  </div>

    <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input mortgage_investment_id" name="mortgageInvestment[0][mortgage_investment_id]" placeholder="0.00">
  </div>

  </div>

    <div class="div-add-mortgage-investment-property"></div>
    <br/>
     <button class="btn btn-info add-mortgage-investment-property" style="width:50px;">Add</button>
         <br/>

<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Liabilities</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input total_related_liabilities_market_value" name="total_related_liabilities_market_value"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input total_related_liabilities_client" name="total_related_liabilities_client"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input total_related_liabilities_partner" name="total_related_liabilities_partner" placeholder="0.00">
  </div>

</div>
<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Net Assets</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input net_assets_market_value" name="net_assets_market_value" placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input net_assets_client" name="net_assets_client"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input net_assets_partner" name="net_assets_partner"  placeholder="0.00">
  </div>

</div>


    </fieldset>
      <fieldset class="group-box">
               <legend class="group-title">PAYG Estimation</legend>
      

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
  
    <div class="col-span-1 md:col-span-3">
      <label>PAYG Estimation - Client</label>
      <input type="text" class="mt-1 form-input payg_estimation_client" name="payg_estimation_client">
    </div>

   
    <div class="col-span-1 md:col-span-3">
      <label >PAYG Estimation - Partner</label>
      <input type="text" class="mt-1 form-input payg_estimation_partner" name="payg_estimation_partner">
    </div>

  </div>
  <br/>
  <div>
  <label class="w-full text-gray-700 font-medium"><i>Note: Above estimates do not include the 2% medicare levy.</i></label>
</div>

    </fieldset>
    
            <fieldset class="group-box">
                <legend class="group-title">Personal Debt Rates</legend>


                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage Rates</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_mortgage_rates" name="personal_debt_rate_mortgage_rates" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_years" name="personal_debt_rate_years">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Personal Loans</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_personal_loans" name="personal_debt_rate_personal_loans" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_personal_loans_years" name="personal_debt_rate_personal_loans_years">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Car Loans</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_car_loans" placeholder="0%" name="personal_debt_rate_car_loans">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_car_loans_years" name="personal_debt_rate_car_loans_years">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt 1</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_other_debts" name="personalDebtRateOtherDebt[0][personal_debt_rate_other_debts]" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_other_debt_years" name="personalDebtRateOtherDebt[0][personal_debt_rate_other_debt_years]">
                    </div>
                    <div class="col-span-1 md:col-span-3">
                        <label>ID</label>
                        <input type="text" class="mt-1 form-input debt_rates_other_id" name="personalDebtRateOtherDebt[${personalOtherDebtsIdx}][debt_rates_other_id]">
                    </div>

                </div>
                  <div class="div-add-personal-other-debts"></div>
    <br/>
     <button class="btn btn-info add-personal-other-debts" style="width:50px;">Add</button>
                <br />
                <!-- <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt 2</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div> -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Credit Card 1</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_credit_card" name="personalDebtRatesCreditCard[0][personal_debt_rate_credit_card]" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_credit_card_years" name="personalDebtRatesCreditCard[0][personal_debt_rate_credit_card_years]">
                    </div>

                       <div class="col-span-1 md:col-span-3">
                        <label>ID</label>
                        <input type="text" class="mt-1 form-input debt_rates_credit_card_id" name="personalDebtRatesCreditCard[0][debt_rates_credit_card_id]">
                    </div>

                </div>
                <br />
                <div class="div-add-personal-credit-cards"></div>
		  <button class="btn btn-info add-personal-credit-cards" style="width:50px;">Add</button>
            </fieldset>


            <fieldset class="group-box">
                <legend class="group-title">Investment Debt Rates</legend>


                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Margin/Investment Loans</label>
                        <input type="text" class="mt-1 form-input investment_debt_rates" name="investment_debt_rates" placeholder="0%">
                    </div>


                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Business Loans</label>
                        <input type="text" class="mt-1 form-input investment_debt_rates_business_loans" name="investment_debt_rates_business_loans" placeholder="0%">
                    </div>


                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage - Existing Investment Properties</label>
                        <input type="text" class="mt-1 form-input mortgage_existing_investment_properties" name="mortgage_existing_investment_properties" placeholder="0%">
                    </div>




                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage - New Investment Properties</label>
                        <input type="text" class="mt-1 form-input mortgage_new_investment_properties" name="mortgage_new_investment_properties" placeholder="0%">
                    </div>




                </div>
                <br />




            </fieldset>
</form>
<br/>
<button type="submit" class="btn btn-primary btn-details" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Save
                                </button>
  <button type="submit" class="btn btn-primary btn-update-details" style="position:relative; bottom:20px;right:20px;float:right; display:none;">
                                Save Changes
                                </button>
<br/>

    </div>
        <script defer="" src="{{ asset('assets/js/ajax-crud.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/form-validation-input.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/get-data-fill-forms.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/append-html.js') }}"></script>
         
         

        
      @section('scripts')

      @endsection
          
  
@endsection
