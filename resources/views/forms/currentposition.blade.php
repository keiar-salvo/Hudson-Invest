@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>View / Current Position</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form class="current-position">
        
<fieldset class="group-box">
  <legend class="group-title">Your Household Income</legend>
  
  <!-- Row 1: Client Income -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Gross Annual Income (Client)</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input gross_anual_income_client w-full max-w-[370px]" name="gross_anual_income_client" style="width:370px;">
    </div>
  </div>

  <!-- Row 2: Partner Income -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Gross Annual Income (Partner)</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input gross_anual_income_partner w-full max-w-[370px]" placeholder="0%" name="gross_anual_income_partner" style="width:370px;">
    </div>
  </div>

  <!-- Row 3: Total Household Income -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4 font-semibold">Total Household Income</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input total_houese_hold_income w-full max-w-[370px]" placeholder="0.00" name="total_houese_hold_income" style="width:370px;">
    </div>
  </div>
</fieldset>

    
<fieldset class="group-box">
  <legend class="group-title">Your Home</legend>
  
  <!-- Row 1: Home Value -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Value of your home</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input your_home_value_of_your_home w-full max-w-[370px]" name="your_home_value_of_your_home" style="width:370px;">
    </div>
  </div>

  <!-- Row 2: Mortgage -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Mortgage</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input your_home_mortgage w-full max-w-[370px]" placeholder="0%" name="your_home_mortgage" style="width:370px;">
    </div>
  </div>

  <!-- Row 3: Equity -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4 font-semibold">Equity in your home</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input equity_in_your_home w-full max-w-[370px]" placeholder="0.00" name="equity_in_your_home" style="width:370px;">
    </div>
  </div>
</fieldset>


  <fieldset class="group-box">
  <legend class="group-title">Investment Portfolio</legend>
  
  <!-- Row 1: Long Term Savings -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Long Term Savings / Term Deposits / Bonds</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_long_term_savings w-full max-w-[370px]" name="investment_portfolio_long_term_savings" style="width:370px;">
    </div>
  </div>

  <!-- Row 2: Superannuation (Client) -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Superannuation (Client) - Net Value</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_superannuation_client_net_value w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_superannuation_client_net_value" style="width:370px;">
    </div>
  </div>

  <!-- Row 3: Superannuation (Partner) -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Superannuation (Partner) - Net Value</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_superannuation_partner_net_value w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_superannuation_partner_net_value" style="width:370px;">
    </div>
  </div>

  <!-- Row 4: Shares / Managed Funds -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Shares / Managed Funds - Net Value</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_shares_net_value w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_shares_net_value" style="width:370px;">
    </div>
  </div>

  <!-- Row 5: Business -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Business - Net Value</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_business_net_value w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_business_net_value" style="width:370px;">
    </div>
  </div>

  <!-- Row 6: Existing Investment Property -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Existing Investment Property Portfolio</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_existing_investment_property w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_existing_investment_property" style="width:370px;">
    </div>
  </div>

  <!-- Row 7: Mortgage -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Mortgage</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_mortgage w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_mortgage" style="width:370px;">
    </div>
  </div>

  <!-- Row 8: Investment Portfolio Total -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4 font-semibold">Investment Portfolio Total</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_total w-full max-w-[370px]" name="investment_portfolio_total" style="width:370px;">
    </div>
  </div>

  <!-- Row 9: Investment Portfolio Net Position -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4 font-semibold">Investment Portfolio Net Position</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_net_position w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_net_position" style="width:370px;">
    </div>
  </div>

  <!-- Row 10: Repay Mortgage on Your Home -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Repay Mortgage on Your Home</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_repay_mortgage w-full max-w-[370px]" placeholder="0%" name="investment_portfolio_repay_mortgage" style="width:370px;">
    </div>
  </div>

  <!-- Row 11: Current Net Financial Assets -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4 font-bold text-base">Current Net Financial Assets</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_current_net_financial_assets w-full max-w-[370px]" placeholder="0.00" name="investment_portfolio_current_net_financial_assets" style="width:370px;">
    </div>
  </div>
</fieldset>


<fieldset class="group-box">
  <legend class="group-title">Projected Values</legend>
  
  <!-- Row 1: Home Value Input -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Value of your Home</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input projected_value_of_your_home w-full max-w-[370px]" name="projected_value_of_your_home" style="width:370px;">
    </div>
  </div>

  <!-- Row 2: Descriptive Note -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
    <!-- Empty columns push the note right under the input box for structural symmetry -->
    <div class="hidden md:block md:col-span-2"></div>
    <div class="col-span-1 md:col-span-2 max-w-[370px]">
      <p class="text-sm text-gray-500 italic leading-snug">
        Note: The future value of your home has been calculated by assuming an average growth rate of 4.5% per annum.
      </p>
    </div>
  </div>
</fieldset>


<fieldset class="group-box">
  <legend class="group-title">Invested Portfolio Assets</legend>
  
  <!-- Row 1: Superannuation -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-1">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Superannuation</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_assets_superannuation w-full max-w-[370px]" name="investment_portfolio_assets_superannuation" style="width:370px;">
    </div>
  </div>

  <!-- Row 2: Superannuation Note -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
    <div class="hidden md:block md:col-span-2"></div>
    <div class="col-span-1 md:col-span-2 max-w-[370px]">
      <p class="text-sm text-gray-500 italic leading-snug">
        Note: The future superannuation value has been calculated by assuming an SG rate of 9.5% of your current salary, contributed quarterly and an average growth rate of 4.5% per annum
      </p>
    </div>
  </div>

  <!-- Row 3: Long-term Savings -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Long-term Saving, Term Deposits, Bonds</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_assets_long_term_savings w-full max-w-[370px]" name="investment_portfolio_assets_long_term_savings" style="width:370px;">
    </div>
  </div>

  <!-- Row 4: Shares / Managed Funds -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Shares / Managed Funds - Net Value</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_assets_shares w-full max-w-[370px]" name="investment_portfolio_assets_shares" style="width:370px;">
    </div>
  </div>

  <!-- Row 5: Business -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Business - Net Value</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_assets_business_net_value w-full max-w-[370px]" name="investment_portfolio_assets_business_net_value" style="width:370px;">
    </div>
  </div>

  <!-- Row 6: Existing Investment Property -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Existing Investment Property Portfolio</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_assets_existing_investment_property w-full max-w-[370px]" name="investment_portfolio_assets_existing_investment_property" style="width:370px;">
    </div>
  </div>

  <!-- Row 7: Mortgage -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Mortgage (assumes Interest Only repayments)</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_assets_mortgage w-full max-w-[370px]" name="investment_portfolio_assets_mortgage" style="width:370px;">
    </div>
  </div>

  <!-- Row 8: Net Financial Assets at Retirement Age -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4 font-bold text-base">Net Financial Assets at Desired Retirement Age</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input investment_portfolio_net_financial_assets w-full max-w-[370px]" placeholder="0.00" name="investment_portfolio_net_financial_assets" style="width:370px;">
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