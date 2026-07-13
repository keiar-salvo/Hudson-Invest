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
        <input type="text" class="mt-1 form-input user_id"  name="user_id" value="{{ session('user_id') }}" style="display:none;">
       
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
  </div>+

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
    
  
</form>
<br/>
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
                $('input').each(function(){
              if($(this).val() != ""){
                $(this).css('border-color','inherit');
              }
              });
          
                Swal.fire({
                title: "Successfully Saved!",
                icon: "success",
                draggable: true
                 });
        
      
            },  
          error: function(error)
            {
               console.log(error);
             $('input').each(function(){
              if($(this).val() == ""){
                $(this).css('border-color','red');
              }
                
             });
                 Swal.fire({
                icon: "error",
                title: "Please provide all requested details",
        

                          });
    
            }
          });

    
         });


$('.age_client').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;

   var client = $('.age_client').val();
   var partner = $('.age_partner').val();
   if(client != "" && partner != "")
   {
    var age_average = (partner  === 0) ? client : (client + partner) / 2;
    $('.age_average').val(age_average);
   }
   
});
$('.age_client').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
       var client = $('.age_client').val();
   var partner = $('.age_partner').val();
   if(client != "" && partner != "")
   {
    var age_average = (partner  === 0) ? client : (client + partner) / 2;
    $('.age_average').val(age_average);
   }
   
});

$('.age_partner').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.age_partner').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
       var client = $('.age_client').val();
   var partner = $('.age_partner').val();
   if(client != "" && partner != "")
   {
   
    if(partner === 0)
    {
      age_average = 0;
    }
    else{
      age_average =parseInt(client)  + parseInt(partner)  / 2;
    }
    $('.age_average').val(Math.trunc(age_average));
   }
   
});

$('.age_average').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.age_average').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
});

$('.target_age').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.target_age').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
});

$('.years_to_target_age').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.years_to_target_age').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
});
$('.current_income_required_in_retirement').on('keypress',function(event){
     if(event.which < 46 || event.which >= 58 || event.which == 47) {
    event.preventDefault();
  }

  if(event.which == 46 && $(this).val().indexOf('.') != -1) {
    this.value = '' ;
  }  
});
$('.initial_appointment_date').on('change',function(){
var dateVal = $('.initial_appointment_date').val();

if (dateVal) {
   
    let d = new Date(dateVal);
    
  
    d.setFullYear(d.getFullYear() + 7);
    
   
    let year = d.getFullYear();
    let month = String(d.getMonth() + 1).padStart(2, '0');
    let day = String(d.getDate()).padStart(2, '0');
    let newDateStr = `${month}/${day}/${year}`;
    
    
    $('.in_seven_years').val(newDateStr);

    let dateFourteen = new Date(dateVal);
    
    
   dateFourteen.setFullYear(dateFourteen.getFullYear() + 14);
  
    let yearFourteen = dateFourteen.getFullYear();
    let monthFourteen = String(d.getMonth() + 1).padStart(2, '0');
    let dayFourteen = String(d.getDate()).padStart(2, '0');
    let newDateStrFourteen = `${monthFourteen}/${dayFourteen}/${yearFourteen}`;
   
    $('.in_fourteen_years').val(newDateStrFourteen);

     let dateTwentyOne = new Date(dateVal);
    
   dateTwentyOne.setFullYear(dateTwentyOne.getFullYear() + 21);
    
  
    let yearTwentyOne = dateTwentyOne.getFullYear();
    let monthTwentyOne = String(d.getMonth() + 1).padStart(2, '0');
    let daywentyOne = String(d.getDate()).padStart(2, '0');
    let newDateStrTwentyOne = `${monthTwentyOne}/${daywentyOne}/${yearTwentyOne}`;
    
    $('.in_twenty_one_years').val(newDateStrTwentyOne);

  
}
});
$('.years_to_target_age').on('keyup', function (e) {

  var dateVal = $('.initial_appointment_date').val();
  if(dateVal != "")
  {
    if($(this).val() != "")
    {
  let desired_retirment_age = new Date(dateVal);
    
  
   desired_retirment_age.setFullYear(desired_retirment_age.getFullYear() + parseInt($(this).val()) );
    
   
    let desiredyearTwentyOne = desired_retirment_age.getFullYear();
    let desireMonth = String(desired_retirment_age.getMonth() + 1).padStart(2, '0');
    let desiredDay = String(desired_retirment_age.getDate()).padStart(2, '0');
    let newdesiredDayMonthYear = `${desireMonth}/${desiredDay}/${desiredyearTwentyOne}`;

      // var desired_result = dateVal + (parseFloat($(this).val) * 365);

    $('.desired_retirement_age').val(newdesiredDayMonthYear);
    $('.desired_retirement_date').val(newdesiredDayMonthYear);
    }
    else{
      $('.desired_retirement_age').val("mm/dd/yyyy");
      $('.desired_retirement_date').val("mm/dd/yyyy");
    }
    
  }
  else {
return false;
  }

});
$('.years_to_target_age').on('keydown', function (e) {
  var dateVal = $('.initial_appointment_date').val();
  if(dateVal == "")
  {
    return false;
  }
});

$('.desired_retirement_age').on('keydown', function (e) {
  return false;
});

$('.in_seven_years').on('keydown', function (e) {
  return false;
});

$('.in_fourteen_years').on('keydown', function (e) {
  return false;
});

$('.in_twenty_one_years').on('keydown', function (e) {
  return false;
});
 $('.desired_retirement_date').on('keydown', function (e) {
  return false;
});

var user_id =  $('.user_id').val();
      $.ajax({
                    url: "{{route('details')}}" + "/" + user_id, // Uses Laravel's route helper
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                      
                      console.log(response);
                    },
                    error: function(error) {
                        console.error("AJAX Error: " + error);
                    }
                });
         });


      </script>
      @endsection
@endsection