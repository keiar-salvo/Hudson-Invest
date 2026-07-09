@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>Forms / Personal Details</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form class="">
        <fieldset class="group-box">
               <legend class="group-title">Personal Details</legend>
      
  <!-- Grid Container: 1 column on mobile, 6 equal columns on desktop -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
  
    <div class="col-span-1 md:col-span-3">
      <label >Name</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Residential Address</label>
      <input type="text" class="mt-1 form-input">
    </div>


    <div class="col-span-1 md:col-span-6">
      <label >Phone (Home)</label>
      <input type="email" class="mt-1 form-input">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >Phone (Home)</label>
      <input type="text" class="mt-1 form-input">
    </div>


    <div class="col-span-1 md:col-span-2">
      <label >Email</label>
      <input type="text" class="mt-1 form-input">
    </div>

  
    <div class="col-span-1 md:col-span-1">
      <label >Age (Client)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <div class="col-span-1 md:col-span-1">
      <label >Age (Partner)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <div class="col-span-1 md:col-span-1">
      <label>Age (Average)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Submit Button: Spans full width -->
    <div class="col-span-1 md:col-span-6 text-right mt-2">
     
    </div>
     
  </div>
    </fieldset>
     <fieldset class="group-box">
               <legend class="group-title">Financial Independence</legend>
      

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
  
    <div class="col-span-1 md:col-span-3">
      <label>Target Age</label>
      <input type="text" class="mt-1 form-input">
    </div>

   
    <div class="col-span-1 md:col-span-3">
      <label >Years to Target Age</label>
      <input type="text" class="mt-1 form-input">
    </div>


  <div class="col-span-1 md:col-span-6">
      <label>Desired Retirement Date</label>

<input id="dateStart" type="date" lang="en-AU" name="start" class="form-input" :min="minStartDate"  required="" style="margin-top:4px;">

                                              
    </div>
  



    <!-- City: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label >% Current Income Required In Retirement</label>
      <input type="text" class="mt-1 form-input">
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
  <br/>
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
  <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

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
</div>
<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

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
</div>
<br/>
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
    <label>Investment Property 3 & beyond</label>
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
  
  
</div>

    </fieldset>

</form>
<br/>
     <button type="submit" class="btn btn-primary btn-details" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Save
                                </button>



    </div>
      @section('scripts')
      <script>
         $(document).ready(function(){
         $(".btn-details").click(function(){
        Swal.fire({
            title: "Successfully Saved!",
            icon: "success",
            draggable: true
            });
         })
         });
      </script>
      @endsection
@endsection