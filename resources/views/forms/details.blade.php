@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline">Forms / Personal Details</a>
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
    
    <!-- First Name: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label >Name</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Last Name: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label >Residential Address</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Email: Spans all 6 columns (Full width) -->
    <div class="col-span-1 md:col-span-6">
      <label >Phone (Home)</label>
      <input type="email" class="mt-1 form-input">
    </div>

    <!-- City: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label >Phone (Home)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- State: Spans 2 of 6 columns (One-third width) -->
    <div class="col-span-1 md:col-span-2">
      <label >Email</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- ZIP Code: Spans 1 of 6 columns (One-sixth width) -->
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
      
  <!-- Grid Container: 1 column on mobile, 6 equal columns on desktop -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
    <!-- First Name: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label>Target Age</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Last Name: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label >Years to Target Age</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Email: Spans all 6 columns (Full width) -->
    <div class="col-span-1 md:col-span-6">
      <label>Desired Retirement Date</label>
      <input type="email" class="mt-1 form-input">
    </div>

    <!-- City: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label >% Cuurent Income Required In Retirement</label>
      <input type="text" class="mt-1 form-input">
    </div>

 
     
  </div>
    </fieldset>
     <fieldset class="group-box">
               <legend class="group-title">Personal Details</legend>
      
  <!-- Grid Container: 1 column on mobile, 6 equal columns on desktop -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
    <!-- First Name: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label class="block text-sm font-medium text-gray-700">Name</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Last Name: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label class="block text-sm font-medium text-gray-700">Residential Address</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Email: Spans all 6 columns (Full width) -->
    <div class="col-span-1 md:col-span-6">
      <label class="block text-sm font-medium text-gray-700">Phone (Home)</label>
      <input type="email" class="mt-1 form-input">
    </div>

    <!-- City: Spans 3 of 6 columns (Half width) -->
    <div class="col-span-1 md:col-span-3">
      <label class="block text-sm font-medium text-gray-700">Phone (Home)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- State: Spans 2 of 6 columns (One-third width) -->
    <div class="col-span-1 md:col-span-2">
      <label class="block text-sm font-medium text-gray-700">Email</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- ZIP Code: Spans 1 of 6 columns (One-sixth width) -->
    <div class="col-span-1 md:col-span-1">
      <label class="block text-sm font-medium text-gray-700">Age (Client)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <div class="col-span-1 md:col-span-1">
      <label class="block text-sm font-medium text-gray-700">Age (Partner)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <div class="col-span-1 md:col-span-1">
      <label class="block text-sm font-medium text-gray-700">Age (Average)</label>
      <input type="text" class="mt-1 form-input">
    </div>

    <!-- Submit Button: Spans full width -->
    <div class="col-span-1 md:col-span-6 text-right mt-2">
     
    </div>
     
  </div>
    </fieldset>
  <br/>


</form>
     <button type="submit" class="btn btn-primary " style="position:relative; bottom:20px;right:20px;float:right;">
                                    Save
                                </button>

</div>

    </div>
@endsection