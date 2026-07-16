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
        <input type="text" class="mt-1 form-input details_id"  name="details_id" value="">
        <input type="text" class="mt-1 form-input encoded_by"  name="encoded_by" value="{{ session('name') }}">
       
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


     
  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Bonus / Commission</label>
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


     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
   <label style=" color: #bd0c1d">Inerest Income</label>
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
  <label>Partner Annual</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

   
     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Rental Income</label>
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


     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
    <label style=" color: #bd0c1d">Dividend Income</label>
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


     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
 <label style=" color: #bd0c1d">Social Security Income</label>
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

  
     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

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
     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
   <label style=" color: #bd0c1d">Other Income</label>
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

     
  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

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

  </div>
    <br/>
  <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">

<div>
   <label style=" color: #bd0c1d">Total Income</label>
   <label>Client Annual</label>
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Partner Annual</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 

     
  </div>

  
    </fieldset>
     <fieldset class="group-box">
        <legend class="group-title">Superannuation Contributions</legend>
      

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Gross Salary</label>
      <input type="text" class="mt-1 form-input">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >SG Rate</label>
      <input type="text" class="mt-1 form-input" placeholder="0%">
    </div>


    <div class="col-span-1 md:col-span-6">
      <label >Annual Contribution</label>
      <input type="email" class="mt-1 form-input">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >Quarterly Contribution</label>
      <input type="text" class="mt-1 form-input">
 

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
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:23px;">
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div style="margin-top:23px;">
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="margin-top:23px;">
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>

  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Cash (everyday)</label>
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

  </div>
<br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Other Personal Assets</label>
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
<div>
   <label style=" color: #bd0c1d">Total Non-Investment Assets</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>

    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  <br/>
    <label style=" color: #bd0c1d">Investment Asset</label>
       <label >Long-term Savings,Term Deposits,Bonds</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:66px;">
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:66px;">
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:66px;">
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div style="margin-top:66px;">
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="margin-top:66px;">
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
<br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Superannuation- Client (net)</label>
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
</div>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Superannuation- Partner (net)</label>
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
</div>

<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Shares/Managed Funds</label>
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
</div>
  
<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Business</label>
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
    <label>Investment Property</label>
    <select name="row[0][non_investment_owner]"  id="non-investment-owner" class="investment_property block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option value="Owner">Owner</option>
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
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

</div>
     <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Assets</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

</div>
<br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label style=" color: #bd0c1d">Liabilities (Non-Investment)</label>
       <label >Mortgage - Principle Residence</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:23px;">
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div style="margin-top:23px;">
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="margin-top:23px;">
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  
       <label >Personal Loans</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  
       <label >Car Loans</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  
       <label >Other Debt 1</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
  
       <label >Other Debt 2</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
       <label >Credit Card 1 <i style="font-weight:normal;font-size:12px;">(If paid in full leave blank)</i></label></label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
   <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
       <label >Credit Card 2 <i style="font-weight:normal;font-size:12px;">(If paid in full leave blank)</i></label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Non-Investment Liabilities</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

</div>
<br/>
 <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label style=" color: #bd0c1d">Investment Related Liabilities</label>
       <label >Margin/Investment Loans</label>
    <select  id="non-investment-owner" class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Owner</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div style="margin-top:23px;">
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%">
  </div>

 <div style="margin-top:23px;">
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00">
  </div>

 <div style="margin-top:23px;">
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="margin-top:23px;">
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00">
  </div>

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
 
       <label >Business Loans</label>
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

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
 
       <label >Mortgage - Investment Property 1</label>
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

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
 
       <label >Mortgage - Investment Property 2</label>
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

  </div>
  <br/>
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
 
       <label >Mortgage - Investment Property 3 and Beyond</label>
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
    <input type="text"  class="mt-1 form-input"  placeholder="0%" style="margin-top:24px;">
  </div>

 <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input"  placeholder="0%" style="margin-top:24px;">
  </div>

 <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input"  placeholder="0.00" style="margin-top:24px;">
  </div>

 <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00" style="margin-top:24px;">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input"  placeholder="0.00" style="margin-top:24px;">
  </div>

  </div>
  <br/>
      <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Investment Liabilities</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

</div>
<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Total Liabilities</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

</div>
<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
   <label style=" color: #bd0c1d">Net Assets</label>
   <label>Market Value</label>
<input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  
  <div style="padding-top: 26px;">
  
   <label>Client</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>
  <div style="padding-top: 26px;">
    <label>Partner</label>
    <input type="text"  class="mt-1 form-input"  placeholder="0.00">
  </div>

</div>


    </fieldset>
      <fieldset class="group-box">
               <legend class="group-title">PAYG Estimation</legend>
      

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
  
    <div class="col-span-1 md:col-span-3">
      <label>PAYG Estimation - Client</label>
      <input type="text" class="mt-1 form-input">
    </div>

   
    <div class="col-span-1 md:col-span-3">
      <label >PAYG Estimation - Partner</label>
      <input type="text" class="mt-1 form-input">
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
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Personal Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Car Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt 1</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt 2</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Credit Card 1</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Credit Card 2</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />




            </fieldset>


            <fieldset class="group-box">
                <legend class="group-title">Investment Debt Rates</legend>


                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Margin/Investment Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Business Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage - Existing Investment Properties</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>




                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage - New Investment Properties</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
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
        <script defer="" src="{{ asset('assets/js/load-custom-functions.js') }}"></script>
      @section('scripts')

      @endsection
          
  
@endsection
