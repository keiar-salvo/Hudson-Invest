@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>View / Financial Independance</b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
    <form class="current-position">
        
<fieldset class="group-box">
  <legend class="group-title">Financial Independence Calculation</legend>
  
  <!-- Row 1 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Current gross household income per annum</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input gross_household_income_per_annum w-full max-w-[370px]" placeholder="0.00" name="gross_household_income_per_annum" style="width:370px;">
    </div>
  </div>

  <!-- Row 2 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Desired % Current Income Required In Retirement</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input desired_current_income_required_retirement w-full max-w-[370px]" placeholder="0.00" name="desired_current_income_required_retirement" style="width:370px;">
    </div>
  </div>

  <!-- Row 3 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Annual gross household income required in retirement (in todays dollars)</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input annual_gross_houshold_income_required_in_retirement w-full max-w-[370px]" placeholder="0.00" name="annual_gross_houshold_income_required_in_retirement" style="width:370px;">
    </div>
  </div>

  <!-- Row 4 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Weekly gross household income required in retirement (in todays dollars)</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input weekly_gross_household_income w-full max-w-[370px]" placeholder="0.00" name="weekly_gross_household_income" style="width:370px;">
    </div>
  </div>

  <!-- Row 5 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Age this year (average of couple)</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input age_this_year w-full max-w-[370px]" placeholder="0.00" name="age_this_year" style="width:370px;">
    </div>
  </div>

  <!-- Row 6 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Preferred retirement age</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input prefer_retirement_age w-full max-w-[370px]" placeholder="0.00" name="prefer_retirement_age" style="width:370px;">
    </div>
  </div>

  <!-- Row 7 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Years to Achieve Financial Independence</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input years_to_achieve_financial_independence w-full max-w-[370px]" placeholder="0.00" name="years_to_achieve_financial_independence" style="width:370px;">
    </div>
  </div>
</fieldset>

<fieldset class="group-box">
  <legend class="group-title">Net Financial Assets</legend>
  
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <!-- Label takes up 2 columns and text is right-aligned on desktop -->
    <label class="md:col-span-2 text-left md:text-right md:pr-4">
      Net Financial Assets <span class="italic text-sm text-gray-500">(as calculated from your Current Position)</span>
    </label>
    
    <!-- Input wrapper takes up the remaining 2 columns -->
    <div class="md:col-span-2">
      <input type="text" class="form-input net_financial_assets w-full max-w-[370px]" placeholder="0.00" name="net_financial_assets" style="width:370px;">
    </div>
  </div>
</fieldset>

<fieldset class="group-box">
  <legend class="group-title">Target</legend>
  
  <!-- Row 1 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Total investment portfolio required to achieve your annual household income retirement goal TODAY</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input total_investment_portfolio_required w-full max-w-[370px]" name="total_investment_portfolio_required" style="width:370px;">
    </div>
  </div>

  <!-- Row 2 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Total investment portfolio required to achieve your annual household income retirement goal by your DESIRED retirement age</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input total_annual_household_income_retirement w-full max-w-[370px]" placeholder="0%" name="total_annual_household_income_retirement" style="width:370px;">
    </div>
  </div>

  <!-- Row 3 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Equivalent value of annual household income you will receive at your desired retirement age</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input equivalent_value_of_annual_household w-full max-w-[370px]" placeholder="0.00" name="equivalent_value_of_annual_household" style="width:370px;">
    </div>
  </div>
</fieldset>

      <fieldset class="group-box">
  <!-- Fixed typo in "Current" and removed double closing tag -->
  <legend class="group-title">Current Financial Asset</legend>
  
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <!-- Label occupies 2 columns and rights-aligns on desktop -->
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Your Current Net Financial Assets Value (shortfall) / surplus</label>
    
    <!-- Input occupies the remaining 2 columns -->
    <div class="md:col-span-2">
      <input type="text" class="form-input your_current_net_financial_assets_value w-full max-w-[370px]" placeholder="0.00" name="your_current_net_financial_assets_value" style="width:370px;">
    </div>
  </div>
</fieldset>


<fieldset class="group-box">
  
  <!-- Row 1 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Annual increase in Net Financial Assets value required to achieve your Financial Independence target</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input annual_increase_in_net_financial_assets w-full max-w-[370px]" name="annual_increase_in_net_financial_assets" style="width:370px;">
    </div>
  </div>

  <!-- Row 2 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Monthly increase in Net Financial Assets value required to achieve your Financial Independence target</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input monthly_increase_in_net_financial_assets w-full max-w-[370px]" placeholder="0.00" name="monthly_increase_in_net_financial_assets" style="width:370px;">
    </div>
  </div>

  <!-- Row 3 -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Weekly increase in Net Financial Assets value required to achieve your Financial Independence target</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input weekly_increase_in_net_financial_assets w-full max-w-[370px]" placeholder="0.00" name="weekly_increase_in_net_financial_assets" style="width:370px;">
    </div>
  </div>

</fieldset>

<fieldset class="group-box">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <!-- Label takes up 2 columns and right-aligns next to the input on desktop -->
    <label class="md:col-span-2 text-left md:text-right md:pr-4">
      Based upon your current level of income and expenses, you have stated that you are able to comfortably contribute this amount of money per week towards your long-term property investment strategy
    </label>
    
    <!-- Input takes up the remaining 2 columns -->
    <div class="md:col-span-2">
      <input type="text" class="form-input current_level_of_income_and_expenses w-full max-w-[370px]" placeholder="0.00" name="current_level_of_income_and_expenses" style="width:370px;">
    </div>
  </div>
</fieldset>

  <br/>
  <fieldset class="group-box">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <!-- Label occupies 2 columns and right-aligns next to the input on desktop -->
    <label class="md:col-span-2 text-left md:text-right md:pr-4">
      Total investment portfolio required to achieve your annual household income retirement goal TODAY
    </label>
    
    <!-- Input occupies the remaining 2 columns -->
    <div class="md:col-span-2">
      <input type="text" class="form-input total_investment_portfolio_achieve_annual_household_today w-full max-w-[370px]" placeholder="0.00" name="total_investment_portfolio_achieve_annual_household_today" style="width:370px;">
    </div>
  </div>
</fieldset>




   



<fieldset class="group-box">
  <legend class="group-title">ASSUMPTIONS Used Throughout This Strategic Property Investment Plan</legend>
  
  <!-- Row 1: Asset Growth Rate -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Annual Compound Growth Rate for Investment Assets</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input annual_compound_growth_rate_investment_assets w-full max-w-[370px]" name="annual_compound_growth_rate_investment_assets" style="width:370px;">
    </div>
  </div>

  <!-- Row 2: Inflation Rate -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Annual Inflation Rate</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input annual_inflation_rate w-full max-w-[370px]" name="annual_inflation_rate" style="width:370px;">
    </div>
  </div>

  <!-- Row 3: Portfolio Income -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Income from Investment Portfolio Assets (before tax)</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input income_investment_portfolio_assets w-full max-w-[370px]" name="income_investment_portfolio_assets" style="width:370px;">
    </div>
  </div>

  <!-- Row 4: Mortgage Interest Rate -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Annual Interest Rate on Mortgages</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input annual_interest_rate_mortgages w-full max-w-[370px]" name="annual_interest_rate_mortgages" style="width:370px;">
    </div>
  </div>

  <!-- Row 5: Super Contribution -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center mb-4">
    <label class="md:col-span-2 text-left md:text-right md:pr-4">Annual Contribution into Superannuation</label>
    <div class="md:col-span-2">
      <input type="text" class="form-input annual_contribution_superannuation w-full max-w-[370px]" name="annual_contribution_superannuation" style="width:370px;">
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