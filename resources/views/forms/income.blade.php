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