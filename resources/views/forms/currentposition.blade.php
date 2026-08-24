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
      
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Gross Annual Income (Client)</label>
      <input type="text" class="mt-1 form-input gross_anual_income_client" name="gross_anual_income_client">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >Gross Annual Income (Partner)</label>
      <input type="text" class="mt-1 form-input gross_anual_income_partner" placeholder="0%" name="gross_anual_income_partner">
    </div>

  </div>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">
    <div>
        <label>Total Household Income</label>
        <input type="text"  class="mt-1 form-input total_houese_hold_income"  placeholder="0.00" name="total_houese_hold_income">
    </div>
</div>
    </fieldset>
    
  <fieldset class="group-box">
        <legend class="group-title">Your Home</legend>
      
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Value of your home</label>
      <input type="text" class="mt-1 form-input your_home_value_of_your_home" name="your_home_value_of_your_home">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >Mortgage</label>
      <input type="text" class="mt-1 form-input your_home_mortgage" placeholder="0%" name="your_home_mortgage">
    </div>

  </div>
  <br/>
    <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">
    <div>
        <label>Equity in your home</label>
        <input type="text"  class="mt-1 form-input equity_in_your_home"  placeholder="0.00" name="equity_in_your_home">
    </div>
</div>
    </fieldset>

    <fieldset class="group-box">
        <legend class="group-title">Investment Portfolio</legend>
      
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Long Term Savings / Term Deposites / Bonds</label>
      <input type="text" class="mt-1 form-input investment_portfolio_long_term_savings" name="investment_portfolio_long_term_savings">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >Superannuation (Client) - Net Value</label>
      <input type="text" class="mt-1 form-input investment_portfolio_superannuation_client_net_value" placeholder="0%" name="investment_portfolio_superannuation_client_net_value">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Superannuation (Partner) - Net Value</label>
      <input type="text" class="mt-1 form-input investment_portfolio_superannuation_partner_net_value" placeholder="0%" name="investment_portfolio_superannuation_partner_net_value">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Shares / Managed Funds - Net Value</label>
      <input type="text" class="mt-1 form-input investment_portfolio_shares_net_value" placeholder="0%" name="investment_portfolio_shares_net_value">
    </div>

     <div class="col-span-1 md:col-span-3">
      <label >Business - Net Value</label>
      <input type="text" class="mt-1 form-input investment_portfolio_business_net_value" placeholder="0%" name="investment_portfolio_business_net_value">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Existing Investment Property Portfolio</label>
      <input type="text" class="mt-1 form-input investment_portfolio_existing_investment_property" placeholder="0%" name="investment_portfolio_existing_investment_property">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Mortgage</label>
      <input type="text" class="mt-1 form-input investment_portfolio_mortgage" placeholder="0%" name="investment_portfolio_einvestment_portfolio_mortgagexisting_investment_property">
    </div>

  </div>
  <br/>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Investment Portfolio Total</label>
      <input type="text" class="mt-1 form-input investment_portfolio_total" name="investment_portfolio_total">
    </div>


    <div class="col-span-1 md:col-span-3">
      <label >Investment Portfolio Net Position</label>
      <input type="text" class="mt-1 form-input investment_portfolio_net_position" placeholder="0%" name="investment_portfolio_net_position">
    </div>

    <div class="col-span-1 md:col-span-3">
      <label >Repay Mortgage on Your Home</label>
      <input type="text" class="mt-1 form-input investment_portfolio_repay_mortgage" placeholder="0%" name="investment_portfolio_repay_mortgage">
    </div>
  </div>
  <br/>


<div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">
    <div>
        <label>Current Net Financial Assets</label>
        <input type="text"  class="mt-1 form-input investment_portfolio_current_net_financial_assets"  placeholder="0.00" name="investment_portfolio_current_net_financial_assets">
    </div>
</div>
    </fieldset>

<fieldset class="group-box">
        <legend class="group-title">Projected Values</legend>
      
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Value of your Home</label>
      <input type="text" class="mt-1 form-input projected_value_of_your_home" name="projected_value_of_your_home">
    </div>
</div>

<div class="w-full ">
   <label class="w-full text-gray-700 font-medium"><i>Note: The future value of your home has been calculated by assuming an average growth rate of 4.5% per annum.</i></label>
</div>
  
    </fieldset>

<fieldset class="group-box">
        <legend class="group-title">Invested Portfolio Assets</legend>
      
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
 

    <div class="col-span-1 md:col-span-3">
      <label >Superannuation</label>
      <input type="text" class="mt-1 form-input investment_portfolio_assets_superannuation" name="investment_portfolio_assets_superannuation">
    </div>

</div>
<div class="w-full ">
   <label class="w-full text-gray-700 font-medium"><i>Note: The future superannuation value has been calculated by assuming an SG rate of 9.5% of your current salary, contributed quarterly and an average growth rate of 4.5% per annum</i></label>
</div>
  <br/>
   <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
     <div class="col-span-1 md:col-span-3">
        <label >Long-term Saving, Term Deposits, Bonds</label>
        <input type="text" class="mt-1 form-input investment_portfolio_assets_long_term_savings" name="investment_portfolio_assets_long_term_savings">
    </div>
    <div class="col-span-1 md:col-span-3">
        <label >Shares / Managed Funds - Net Value</label>
        <input type="text" class="mt-1 form-input investment_portfolio_assets_shares" name="investment_portfolio_assets_shares">
    </div>
      <div class="col-span-1 md:col-span-3">
        <label >Business - Net Value</label>
        <input type="text" class="mt-1 form-input investment_portfolio_assets_business_net_value" name="investment_portfolio_assets_business_net_value">
    </div>
    <div class="col-span-1 md:col-span-3">
        <label >Existing Invesment Propety Portfolio</label>
        <input type="text" class="mt-1 form-input investment_portfolio_assets_existing_investment_property" name="investment_portfolio_assets_existing_investment_property">
    </div>
      <div class="col-span-1 md:col-span-3">
        <label >Mortgage (assumes Interest Only repayments)</label>
        <input type="text" class="mt-1 form-input investment_portfolio_assets_mortgage" name="investment_portfolio_assets_mortgage">
    </div>
   </div>
   <br/>
   <div class="grid grid-cols-1 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-5">
    <div>
        <label>Net Financial Assets at Desired Retirement Age</label>
        <input type="text"  class="mt-1 form-input investment_portfolio_net_financial_assets"  placeholder="0.00" name="investment_portfolio_net_financial_assets" >
    </div>
</div>
    </fieldset>
    
    
</form>
<br/>
     <button type="submit" class="btn btn-primary btn-details" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Save
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