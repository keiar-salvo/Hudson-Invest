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