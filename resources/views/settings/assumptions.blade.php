@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>Settings / Assumption Rates</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form  method="POST" id="" class="assumption-details">
        	@method('POST')
     <fieldset class="group-box">
               <legend class="group-title">Assumptions Used Throughout This Strategic Property Investment Plan</legend>
      

  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
  
    <div class="col-span-1 md:col-span-3">
      <label>Annual Compound Growth Rate for Investment Assets</label>
      <input type="text" class="mt-1 form-input annual_compound_growth_rate_investment_assets" name="annual_compound_growth_rate_investment_assets" placeholder = "0.00">
    </div>

   
    <div class="col-span-1 md:col-span-3">
      <label >Annual Inflation Rate</label>
      <input type="text" class="mt-1 form-input annual_inflation_rate" name="annual_inflation_rate" placeholder = "0.00">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Income from Investment Portfolio Assets (before tax)</label>
      <input type="text" class="mt-1 form-input income_investment_portfolio_assets" name="income_investment_portfolio_assets" placeholder = "0.00">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Annual Interest Rate on Mortgages</label>
      <input type="text" class="mt-1 form-input annual_interest_rate_mortgages" name="annual_interest_rate_mortgages" placeholder = "0.00">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Annual Contribution into Superannuation</label>
      <input type="text" class="mt-1 form-input annual_contribution_superannuation" name="annual_contribution_superannuation" placeholder = "0.00">
    </div>

     <div class="col-span-1 md:col-span-3">
      <label >ID</label>
      <input type="text" class="mt-1 form-input assumption_id" name="assumption_id" placeholder = "0.00" style="display:none;">
    </div>


  </div>
  <br/>
  <div>
  <!-- <label class="w-full text-gray-700 font-medium"><i>Note: Above estimates do not include the 2% medicare levy.</i></label> -->
</div>

    </fieldset>
    

</form>
<br/>
     <button type="submit" class="btn btn-primary btn-save" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Save
                                </button>

    <button type="submit" class="btn btn-primary btn-savechanges" style="position:relative; bottom:20px;right:20px;float:right; display:none;">
                                    Save Changes
                                </button>



    </div>
      @section('scripts')
      <script>
         $(document).ready(function(){
              var appURL = window.location.origin;
         $(".btn-save").click(function(){
             var formData = new FormData($('.assumption-details').get(0))
             $.ajax({
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },      
    url: appURL + "/assumptionrates",
    method: "POST",
    data:formData,       
    processData: false,
    contentType: false,
    success: function(response)
    {
           
      
    Swal.fire({
    title: "Successfully saved",
    icon: "success",
    draggable: true
    });
  $('.btn-save').css('display','none');
  $('.btn-savechanges').css('display','block');
      },  
  error: function(xhr) 
        {
            console.log(xhr);
            
      
            let errorsSource = xhr.responseJSON?.errors ?? {};
            let allErrors = Object.values(errorsSource).flat();
              
            let errorMessageHtml = "";
            
            if (allErrors.length > 0) {
                errorMessageHtml = `<br/>
                    <div style="text-align: left; max-height: 250px; overflow-y: auto; padding: 10px;  border-radius: 5px;">
                        <ul style="margin: 0; padding-left: 20px; color: #d32f2f;">
                            ${allErrors.map(err => `<li style="margin-bottom: 5px;">${err}</li>`).join('')}
                        </ul>
                    </div>
                `;
            } else {
                errorMessageHtml = "Please provide all requested details.";
            }
               
        
            Swal.fire({
                icon: "error",
                title: "Form Validation Failed",
                html: errorMessageHtml, 
                confirmButtonColor: "#3085d6"
            });
        }
          });
      
         });

$(".btn-savechanges").click(function(){
    var formData = new FormData($('.assumption-details').get(0))
$.ajax({
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },      
    url: appURL + "/assumptionrates/" + $('.assumption_id').val(),
    method: "POST",
    data:formData,       
    processData: false,
    contentType: false,
    success: function(response)
    {
           
      
    Swal.fire({
    title: "Changes Applied",
    icon: "success",
    draggable: true
    });
  
      },  
  error: function(xhr) 
        {
            console.log(xhr);
            
      
            let errorsSource = xhr.responseJSON?.errors ?? {};
            let allErrors = Object.values(errorsSource).flat();
              
            let errorMessageHtml = "";
            
            if (allErrors.length > 0) {
                errorMessageHtml = `<br/>
                    <div style="text-align: left; max-height: 250px; overflow-y: auto; padding: 10px;  border-radius: 5px;">
                        <ul style="margin: 0; padding-left: 20px; color: #d32f2f;">
                            ${allErrors.map(err => `<li style="margin-bottom: 5px;">${err}</li>`).join('')}
                        </ul>
                    </div>
                `;
            } else {
                errorMessageHtml = "Please provide all requested details.";
            }
               
        
            Swal.fire({
                icon: "error",
                title: "Form Validation Failed",
                html: errorMessageHtml, 
                confirmButtonColor: "#3085d6"
            });
        }
          });
      
         });

// Get Rates on load
$.ajax({
  url: appURL + "/assumptionrates",
  type: "GET",
  dataType: "json",
  success: function(response) {   
  console.log(response.length);

  if(response.length !== 0)
  {
    $('.annual_compound_growth_rate_investment_assets').val(response[0]['annual_compound_growth_rate_investment_assets']);
    $('.annual_inflation_rate').val(response[0]['annual_inflation_rate']);
    $('.income_investment_portfolio_assets').val(response[0]['income_investment_portfolio_assets']);
    $('.annual_interest_rate_mortgages').val(response[0]['annual_interest_rate_mortgages']);
    $('.annual_contribution_superannuation').val(response[0]['annual_contribution_superannuation']);
     $('.assumption_id').val(response[0]['id']);

    $('.btn-save').css('display','none');
    $('.btn-savechanges').css('display','block');
  }
  else{
    $('.btn-save').css('display','block');
    $('.btn-savechanges').css('display','none');
  }

   
  
  }
});

         $('.annual_compound_growth_rate_investment_assets, .annual_inflation_rate, .income_investment_portfolio_assets,.annual_interest_rate_mortgages, .annual_contribution_superannuation').on('keydown',function(e){

      let $input = $(this);
        let currentVal = $input.val();
        
        // 1. Always allow system/control keys (Backspace, Delete, Arrows, Tab)
        const controlKeys = ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight', 'Tab', 'Enter'];
        if (controlKeys.includes(e.key) || e.ctrlKey || e.metaKey) {
            return; 
        }

        // 2. Block any key that isn't a number or a period straight away
        if (!/[0-9.]/.test(e.key)) {
            e.preventDefault();
            return;
        }

        // 3. Predict what the value will look like if this keypress is allowed
        let start = this.selectionStart;
        let end = this.selectionEnd;
        let futureVal = currentVal.slice(0, start) + e.key + currentVal.slice(end);

        // 4. Regex Rule: Max 100, allows decimals, but blocks more than 2 decimal places
        // This will reject "4.506" instantly
        const maxTwoDecimalsRegex = /^(100(\.0{0,2})?|[0-9]{0,2}(\.[0-9]{0,2})?)$/;

        if (!maxTwoDecimalsRegex.test(futureVal)) {
            e.preventDefault(); // Block the extra numbers instantly
        }
         });
            });
      </script>
      @endsection
@endsection