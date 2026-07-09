@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>Forms / Financial Independence</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form class="">
        
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