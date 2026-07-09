@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>Forms / Income</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form class="">
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


    </form>
	<br/>
	<button type="submit" class="btn btn-primary btn-details" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Save
                                </button>
</div>
 






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