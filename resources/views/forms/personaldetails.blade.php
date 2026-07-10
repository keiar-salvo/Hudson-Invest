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
  
    <form  method="POST" id="personaldetails">
          
        	@method('POST')
        <fieldset class="group-box">
               <legend class="group-title">Personal Details</legend>
               <input type="text" name="_token" id="token" value="{{ csrf_token() }}" style="display:none;">
        <input type="text" class="mt-1 form-input" name="user_id" value="{{ session('user_id') }}" style="display:none;">
       
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
      <input type="text" class="mt-1 form-input phone_mobile" name="phone_home" id="">
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
      <input type="text" class="mt-1 form-input age_partner" name="age_average" id="">
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
		<label style=" color: #bd0c1d">Initial Appointment Date</label>
  
      <label>Desired Retirement Date</label>
		<input type="date" lang="en-AU"  class="form-input"   required="" style="margin-top:4px;" name="initial_appointment_date">
	</div>
  
  <div style="padding-top: 26px;">
  
   <label>Desired Retirement Age</label>
    <input type="text"  class="mt-1 form-input desired_retirement_age"  placeholder="mm/dd/yyyy" name="desired_retirement_age" id="">
  </div>
  <div style="padding-top: 26px;">
    <label>In 7 years</label>
    <input type="text"  class="mt-1 form-input in_seven_years"  placeholder="mm/dd/yyyy" name="in_seven_years" id="">
  </div>
   <div style="padding-top: 26px;">
    <label>In 14 years</label>
    <input type="text"  class="mt-1 form-input in_fourteen_years"  placeholder="mm/dd/yyyy" name="in_fourteen_years" >
  </div>
  <div style="padding-top: 26px;">
    <label>In 21 years</label>
    <input type="text"  class="mt-1 form-input in_twenty_one_years"  placeholder="mm/dd/yyyy" name="in_twenty_one_years" >
  </div>+

</div>

    </fieldset>
   <br/>
  
</form>
<button type="submit" class="btn btn-primary btn-details" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Save
                                </button>
<br/>
   



    </div>
      @section('scripts')
      <script>
         $(document).ready(function(){
         
         $(".btn-details").click(function(event){
          
          event.preventDefault();
          var formData = new FormData($('#personaldetails').get(0))
          formData.append('_method','POST');
          console.log(formData);
          $.ajax({
          headers: {
          'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          
          url: "{{route('details')}}",
          method: "POST",
          data:formData,       
          processData: false,
          contentType: false,
    
          success: function(response)
            {
          
                Swal.fire({
                title: "Successfully Saved!",
                icon: "success",
                draggable: true
                 });
        
      
            },  
          error: function(error)
            {
               console.log(error);
             
                 Swal.fire({
                icon: "error",
                title: "Please provide all requested details",
        

                          });
    
            }
          });

    
         })
         });
      </script>
      @endsection
@endsection