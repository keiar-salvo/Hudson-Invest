@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>View / Investment Property Today</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form class="current-position">
        
<fieldset class="group-box mb-6">
    <legend class="group-title">Investment Portfolio</legend>
    
    <!-- Row 1: Dual Input Fields aligned perfectly on one row -->
    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
        <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
            Long-term Savings, Term Deposits, Bonds
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
                    Current Value
                </label>
                <input type="text" id="" class="form-input w-full long_term_saving_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                    At Desired Age
                </label>
                <input type="text" id="" class="form-input w-full long_term_saving_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>

    <!-- Row 2 -->
       <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
        <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
            Superannuation (Client) - Net Value
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
              
                </label>
                <input type="text" id="" class="form-input w-full superannuation_client_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                  
                </label>
                <input type="text" id="" class="form-input w-full superannuation_client_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>

    <!-- Row 3 -->
     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
        <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
          Superannuation (Partner) - Net Value
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
                
                </label>
                <input type="text" id="" class="form-input w-full superannuation_partner_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
        
                </label>
                <input type="text" id="" class="form-input w-full superannuation_partner_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>

    <!-- Row 4 -->
     
   <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
         Shares / Managed Funds - Net Value
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
                
                </label>
                <input type="text" id="" class="form-input w-full shares_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
               
                </label>
                <input type="text" id="" class="form-input w-full shares_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>

    <!-- Row 5 -->
  <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
        Business - Net Value
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
              
                </label>
                <input type="text" id="" class="form-input w-full business_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
              
                </label>
                <input type="text" id="" class="form-input w-full business_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
       Investment Portfolio (excluding investment property)
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
               
                </label>
                <input type="text" id="" class="form-input w-full investment__portfolio_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
              
                </label>
                <input type="text" id="" class="form-input w-full investment__portfolio_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>

    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
    Existing Investment Properties
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
                 
                </label>
                <input type="text" id="" class="form-input w-full existing_investment_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                  
                </label>
                <input type="text" id="" class="form-input w-full existing_investment_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>

        <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
   Less: Existing Investment Property Mortgage
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
        <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
                 
                </label>
                <input type="text" id="" class="form-input w-full less_existing_investment_mortgage_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
               
                </label>
                <input type="text" id="" class="form-input w-full less_existing_investment_mortgage_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
         
<div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
   Equity in Existing Investment Property
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
           
                </label>
                <input type="text" id="" class="form-input w-full equity_existing_property_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                  
                </label>
                <input type="text" id="" class="form-input w-full equity_existing_property_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
  New Investment Property 1
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
             
                </label>
                <input type="text" id="" class="form-input w-full new_investment_property_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                
                </label>
                <input type="text" id="" class="form-input w-full new_investment_property_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
      <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Less: Investment Property 1 Mortgage
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
             
                </label>
                <input type="text" id="" class="form-input w-full less_investment_prop_mortgage_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                   
                </label>
                <input type="text" id="" class="form-input w-full less_investment_prop_mortgage_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Equity in Investment Property 1
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
               
                </label>
                <input type="text" id="" class="form-input w-full equity_investment_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                  
                </label>
                <input type="text" id="" class="form-input w-full equity_investment_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Total Investment Property Value
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
             
                </label>
                <input type="text" id="" class="form-input w-full total_investment_property_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                 
                </label>
                <input type="text" id="" class="form-input w-full total_investment_property_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
      <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Less: Total Investment Property Mortgage
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
           
                </label>
                <input type="text" id="" class="form-input w-full total_less_investment_prop_mortgage_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                  
                </label>
                <input type="text" id="" class="form-input w-full total_less_investment_prop_mortgage_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Equity in Investment Property Portfolio
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
               
                </label>
                <input type="text" id="" class="form-input w-full equity_investment_prop_port_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                
                </label>
                <input type="text" id="" class="form-input w-full equity_investment_prop_port_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
      <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Total Investment Portfolio
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
               
                </label>
                <input type="text" id="" class="form-input w-full total_investment_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                   
                </label>
                <input type="text" id="" class="form-input w-full total_investment_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>

     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Investment Portfolio Target <i>(as calculated in Financial Independence)</i>
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
               
                </label>
                <input type="text" id="" class="form-input w-full investment_portfolio_target_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                  
                </label>
                <input type="text" id="" class="form-input w-full investment_portfolio_target_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Total <span style="color:#bd0c1d;">(Shortfall)</span> / Surplus
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
              
                </label>
                <input type="text" id="" class="form-input w-full total_shortfall_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                   
                </label>
                <input type="text" id="" class="form-input w-full total_shortfall_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Household Income Target (as calculated in Financial Independence)
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
              
                </label>
                <input type="text" id="" class="form-input w-full houesehold_income_target_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                
                </label>
                <input type="text" id="" class="form-input w-full houesehold_income_target_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Estimated Income From Net Investments
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
               
                </label>
                <input type="text" id="" class="form-input w-full estimated_income_current_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                    
                </label>
                <input type="text" id="" class="form-input w-full estimated_income_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
     <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
       <!-- Left Side: Main Label -->
        <label class="w-full md:w-1/2 text-left font-bold text-gray-800">
Estimated Total Income <span style="color:#bd0c1d;">(Shortfall)</span> / Surplus
        </label>
        
        <!-- Right Side: Both inputs side-by-side within the exact 370px maximum width -->
    <div class="w-full md:w-1/2 max-w-[370px] grid grid-cols-2 gap-3">
            <!-- First Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="">
               
                </label>
                <input type="text" id="" class="form-input w-full estimated_total_income_value" placeholder="0.00" name="">
            </div>
            
            <!-- Second Input Group -->
            <div class="flex flex-col gap-1">
                <label class="text-xs font-semibold text-gray-600 uppercase tracking-wider" for="retirement_value">
                  
                </label>
                <input type="text" id="" class="form-input w-full estimated_total_income_retirement_value" placeholder="0.00" name="retirement_value">
            </div>
        </div>
    </div>
           
             
</fieldset>




    
    
</form>
<br/>
     <button type="submit" class="btn btn-danger btn-close" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Close
                                </button>



    </div>
        <script defer="" src="{{ asset('assets/js/ajax-crud.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/form-validation-calculation-input.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/get-data-fill-forms.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/append-html.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/unary-calculations.js') }}"></script>
         
      @section('scripts')
      <script>
       $(document).ready(function(){
         $(".btn-close").click(function(){
            window.close();
         })
         });
      </script>
      @endsection
@endsection