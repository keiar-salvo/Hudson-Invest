function filldataforms(response)
{

  if (!response) {
    console.warn("filldataforms received an empty or null response.");
    return;
  }


  const personal = response['personalDetails'];
  const financial = response['financialDetails'];
  const income = response['IncomeDetails'];
  const liabilities = response['TotalLiabilitites']; 
  const superAnn = response['SuperannuationDetails'];
  const nonInvest = response['NonInvestmentAssets'];
  const invest = response['InvestmentAssets'];
  const liabNonInvest = response['LiabilitiesNonInvestment'];
  const investLiab = response['InvestmentRelatedLiabilities'];
  const payg = response['PaygEstimation'];
  const personalRates = response['PersonalDebtRates'];
  const investRates = response['InvestmentDebtRates'];
  const netasset = response['NetAssets'];

  // Personal Details
  $('.name').val(personal?.['name'] ?? '');
  $('.residential_address').val(personal?.['residential_address'] ?? '');
  $('.phone_home').val(personal?.['phone_home'] ?? '');
  $('.phone_mobile').val(personal?.['phone_mobile'] ?? '');
  $('.email').val(personal?.['email'] ?? '');
  $('.age_client').val(personal?.['age_client'] ?? '');
  $('.age_partner').val(personal?.['age_partner'] ?? '');
  $('.age_average').val(personal?.['age_average'] ?? '');
  $('.amount_per_week').val(personal?.['amount_per_week'] ?? '');
  $('.initial_appointment_date').val(personal?.['initial_appointment_date'] ?? '');
  $('.desired_retirement_age').val(personal?.['desired_retirement_age'] ?? '');
  $('.in_seven_years').val(personal?.['in_seven_years'] ?? '');
  $('.in_fourteen_years').val(personal?.['in_fourteen_years'] ?? '');
  $('.in_twenty_one_years').val(personal?.['in_twenty_one_years'] ?? '');

  // Financial Details
  $('.target_age').val(financial?.['target_age'] ?? '');
  $('.years_to_target_age').val(financial?.['years_to_target_age'] ?? '');
  $('.desired_retirement_date').val(financial?.['desired_retirement_date'] ?? '');
  $('.current_income_required_in_retirement').val(financial?.['current_income_required_in_retirement'] ?? '');

  // Income Data - Salary
  $('#salary_frequency').val(income?.['salary_frequency'] ?? '');
  $('.salary_client').val(income?.['salary_client'] ?? '');
  $('.salary_partner').val(income?.['salary_partner'] ?? '');
  $('.salary_client_annual').val(income?.['salary_client_annual'] ?? '');
  $('.salary_partner_annual').val(income?.['salary_partner_annual'] ?? '');

  // Income Data - Bonus
  $('#bonus_frequency').val(income?.['bonus_frequency'] ?? '');
  $('.bonus_client').val(income?.['bonus_client'] ?? '');
  $('.bonus_partner').val(income?.['bonus_partner'] ?? '');
  $('.bonus_client_annual').val(income?.['bonus_client_annual'] ?? '');
  $('.bonus_partner_annual').val(income?.['bonus_partner_annual'] ?? '');

  // Income Data - Interest
  $('#interest_income_frequency').val(income?.['interest_income_frequency'] ?? '');
  $('.interest_income_client').val(income?.['interest_income_client'] ?? '');
  $('.interest_income_partner').val(income?.['interest_income_partner'] ?? '');
  $('.interest_income_client_annual').val(income?.['interest_income_client_annual'] ?? '');
  $('.interest_income_partner_annual').val(income?.['interest_income_partner_annual'] ?? '');

  // Income Data - Rental
  $('#rental_income_frequency').val(income?.['rental_income_frequency'] ?? '');
  $('.rental_income_client').val(income?.['rental_income_client'] ?? '');
  $('.rental_income_partner').val(income?.['rental_income_partner'] ?? '');
  $('.rental_income_client_annual').val(income?.['rental_income_client_annual'] ?? '');
  $('.rental_income_partner_annual').val(income?.['rental_income_partner_annual'] ?? '');

  // Income Data - Dividend
  $('#dividend_income_frequency').val(income?.['dividend_income_frequency'] ?? '');
  $('.dividend_income_client').val(income?.['dividend_income_client'] ?? '');
  $('.dividend_income_partner').val(income?.['dividend_income_partner'] ?? '');
  $('.dividend_income_client_annual').val(income?.['dividend_income_client_annual'] ?? '');
  $('.dividend_income_partner_annual').val(income?.['dividend_income_partner_annual'] ?? '');

  // Income Data - SS
  $('#ss_income_frequency').val(income?.['ss_income_frequency'] ?? '');
  $('.ss_income_client').val(income?.['ss_income_client'] ?? '');
  $('.ss_income_partner').val(income?.['ss_income_partner'] ?? '');
  $('.ss_income_client_annual').val(income?.['ss_income_client_annual'] ?? '');
  $('.ss_income_partner_annual').val(income?.['ss_income_partner_annual'] ?? '');

  // Income Data - Business
  $('#business_income_frequency').val(income?.['business_income_frequency'] ?? '');
  $('.business_income_client').val(income?.['business_income_client'] ?? '');
  $('.business_income_partner').val(income?.['business_income_partner'] ?? '');
  $('.business_income_client_annual').val(income?.['business_income_client_annual'] ?? '');
  $('.business_income_partner_annual').val(income?.['business_income_partner_annual'] ?? '');

  // Income Data - Other
  $('#other_income_frequency').val(income?.['other_income_frequency'] ?? '');
  $('.other_income_client').val(income?.['other_income_client'] ?? '');
  $('.other_income_partner').val(income?.['other_income_partner'] ?? '');
  $('.other_income_client_annual').val(income?.['other_income_client_annual'] ?? '');
  $('.other_income_partner_annual').val(income?.['other_income_partner_annual'] ?? '');

  // Income Totals
  $('.total_income_client_annual').val(income?.['total_income_client_annual'] ?? '');
  $('.total_income_partner_annual').val(income?.['total_income_partner_annual'] ?? '');

  // Liabilities Data
  $('.total_liabilities_market_value').val(liabilities?.['total_liabilities_market_value'] ?? ''); 
  $('.total_liabilities_client').val(liabilities?.['total_liabilities_client'] ?? ''); 
  $('.total_liabilities_partner').val(liabilities?.['total_liabilities_partner'] ?? ''); 

  // Superannuation
  $('.gross_salary').val(superAnn?.['gross_salary'] ?? '');
  $('.sg_rate').val(superAnn?.['sg_rate'] ?? '');
  $('.annual_contribution').val(superAnn?.['annual_contribution'] ?? '');
  $('.quarterly_contribution').val(superAnn?.['quarterly_contribution'] ?? '');
  $('.partner_gross_salary').val(superAnn?.['partner_gross_salary'] ?? '');
  $('.partner_sg_rate').val(superAnn?.['partner_sg_rate'] ?? '');
  $('.partner_annual_contribution').val(superAnn?.['partner_annual_contribution'] ?? '');
  $('.partner_quarterly_contribution').val(superAnn?.['partner_quarterly_contribution'] ?? '');
  $('.grand_total_annual').val(superAnn?.['grand_total_annual'] ?? '');
  $('.grand_total_quarterly').val(superAnn?.['grand_total_quarterly'] ?? '');

  // Non-Investment Asset
  $('.principle_residence').val(nonInvest?.['principle_residence'] ?? '');
  $('.principle_client_percentage').val(nonInvest?.['principle_client_percentage'] ?? '');
  $('.principle_partner_percentage').val(nonInvest?.['principle_partner_percentage'] ?? '');
  $('.principle_market_value').val(nonInvest?.['principle_market_value'] ?? '');
  $('.principle_client').val(nonInvest?.['principle_client'] ?? '');
  $('.principle_partner').val(nonInvest?.['principle_partner'] ?? '');
  $('.cash_everyday').val(nonInvest?.['cash_everyday'] ?? '');
  $('.cash_client_percentage').val(nonInvest?.['cash_client_percentage'] ?? '');
  $('.cash_partner_percentage').val(nonInvest?.['cash_partner_percentage'] ?? '');
  $('.cash_market_value').val(nonInvest?.['cash_market_value'] ?? '');
  $('.cash_client').val(nonInvest?.['cash_client'] ?? '');
  $('.cash_partner').val(nonInvest?.['cash_partner'] ?? '');
  $('.total_non_investment_market_value').val(nonInvest?.['total_market_value'] ?? '');
  $('.total_non_investment_client').val(nonInvest?.['total_client'] ?? '');
  $('.total_non_investment_partner').val(nonInvest?.['total_partner'] ?? '');

  // Investment Asset
  $('.long_term_investment_asset').val(invest?.['long_term_investment_asset'] ?? '');
  $('.long_term_client_percentage').val(invest?.['long_term_client_percentage'] ?? '');
  $('.long_term_partner_percentage').val(invest?.['long_term_partner_percentage'] ?? '');
  $('.long_term_market_value').val(invest?.['long_term_market_value'] ?? '');
  $('.long_term_client').val(invest?.['long_term_client'] ?? '');
  $('.long_term_partner').val(invest?.['long_term_partner'] ?? '');
  $('.superannuation_client_net').val(invest?.['superannuation_client_net'] ?? '');
  $('.superannuation_client_client_percentage').val(invest?.['superannuation_client_client_percentage'] ?? '');
  $('.superannuation_client_partner_percentage').val(invest?.['superannuation_client_partner_percentage'] ?? '');
  $('.superannuation_client_market_value').val(invest?.['superannuation_client_market_value'] ?? '');
  $('.superannuation_client_client').val(invest?.['superannuation_client_client'] ?? '');
  $('.superannuation_client_partner').val(invest?.['superannuation_client_partner'] ?? '');
  $('.superannuation_partner_net').val(invest?.['superannuation_partner_net'] ?? '');
  $('.superannuation_partner_client_percentage').val(invest?.['superannuation_partner_client_percentage'] ?? '');
  $('.superannuation_partner_parnter_percentage').val(invest?.['superannuation_partner_parnter_percentage'] ?? '');
  $('.superannuation_partner_market_value').val(invest?.['superannuation_partner_market_value'] ?? '');
  $('.superannuation_partner_client').val(invest?.['superannuation_partner_client'] ?? '');
  $('.superannuation_partner_partner').val(invest?.['superannuation_partner_partner'] ?? '');
  $('.shares_fund').val(invest?.['shares_fund'] ?? '');
  $('.shares_fund_client_percentage').val(invest?.['shares_fund_client_percentage'] ?? '');
  $('.shares_fund_partner_percentage').val(invest?.['shares_fund_partner_percentage'] ?? '');
  $('.shares_fund_market_value').val(invest?.['shares_fund_market_value'] ?? '');
$('.shares_fund_client').val(invest?.['shares_fund_client'] ?? '');

$('.shares_fund_partner').val(invest?.['shares_fund_partner'] ?? '');
$('.business').val(invest?.['business'] ?? '');
$('.business_client_percentage').val(invest?.['business_client_percentage'] ?? '');
$('.business_partner_percentage').val(invest?.['business_partner_percentage'] ?? '');
$('.business_market_value').val(invest?.['business_market_value'] ?? '');
$('.business_client').val(invest?.['business_client'] ?? '');
$('.business_partner').val(invest?.['business_partner'] ?? '');
$('.total_investment_asset_market_value').val(invest?.['total_investment_asset_market_value'] ?? '');
$('.total_investment_asset_client').val(invest?.['total_investment_asset_client'] ?? '');
$('.total_investment_asset_partner').val(invest?.['total_investment_asset_partner'] ?? '');
$('.total_asset_market_value').val(invest?.['total_asset_market_value'] ?? '');
$('.total_asset_client').val(invest?.['total_asset_client'] ?? '');
$('.total_asset_partner').val(invest?.['total_asset_partner'] ?? '');

// Liabilities Non-Investment
 $('.mortgage_residence').val(liabNonInvest?.['mortgage_residence'] ?? '');
 $('.mortgage_client_percentage').val(liabNonInvest?.['mortgage_client_percentage'] ?? '');
 $('.mortgage_partner_percentage').val(liabNonInvest?.['mortgage_partner_percentage'] ?? '');
 $('.mortgage_market_value').val(liabNonInvest?.['mortgage_market_value'] ?? '');
 $('.mortgage_client').val(liabNonInvest?.['mortgage_client'] ?? '');
 $('.mortgage_partner').val(liabNonInvest?.['mortgage_partner'] ?? '');
 $('.personal_loans').val(liabNonInvest?.['personal_loans'] ?? '');
 $('.personal_loans_client_percentage').val(liabNonInvest?.['personal_loans_client_percentage'] ?? '');
 $('.personal_loans_partner_percentage').val(liabNonInvest?.['personal_loans_partner_percentage'] ?? '');
 $('.personal_loans_market_value').val(liabNonInvest?.['personal_loans_market_value'] ?? '');
 $('.personal_loans_client').val(liabNonInvest?.['personal_loans_client'] ?? '');
 $('.personal_loans_partner').val(liabNonInvest?.['personal_loans_partner'] ?? '');
 $('.car_loans').val(liabNonInvest?.['car_loans'] ?? '');
 $('.car_loans_client_percentage').val(liabNonInvest?.['car_loans_client_percentage'] ?? '');
 $('.car_loans_partner_percentage').val(liabNonInvest?.['car_loans_partner_percentage'] ?? '');
 $('.car_loans_market_value').val(liabNonInvest?.['car_loans_market_value'] ?? '');
 $('.car_loans_client').val(liabNonInvest?.['car_loans_client'] ?? '');
 $('.car_loans_partner').val(liabNonInvest?.['car_loans_partner'] ?? '');
 $('.total_non_invesment_liabilities_market_value').val(liabNonInvest?.['total_non_invesment_liabilities_market_value'] ?? '');
 $('.total_non_invesment_liabilities_client').val(liabNonInvest?.['total_non_invesment_liabilities_client'] ?? '');
 $('.total_non_invesment_liabilities_partner').val(liabNonInvest?.['total_non_invesment_liabilities_partner'] ?? '');
  // Investment Related Liabilities
  $('.margin_investment_loans').val(investLiab?.['margin_investment_loans'] ?? '');
  $('.margin_investment_client_percentage').val(investLiab?.['margin_investment_client_percentage'] ?? '');
  $('.margin_investment_partner_percentage').val(investLiab?.['margin_investment_partner_percentage'] ?? '');
  $('.margin_investment_market_value').val(investLiab?.['margin_investment_market_value'] ?? '');
  $('.margin_investment_client').val(investLiab?.['margin_investment_client'] ?? '');
  $('.margin_investment_partner').val(investLiab?.['margin_investment_partner'] ?? '');
  
  $('.business_loans').val(investLiab?.['business_loans'] ?? '');
  $('.business_loans_client_percentage').val(investLiab?.['business_loans_client_percentage'] ?? '');
  $('.business_loans_partner_percentage').val(investLiab?.['business_loans_partner_percentage'] ?? '');
  $('.business_loans_market_value').val(investLiab?.['business_loans_market_value'] ?? '');
  $('.business_loans_client').val(investLiab?.['business_loans_client'] ?? '');
  $('.business_loans_partner').val(investLiab?.['business_loans_partner'] ?? '');

  // PayG Estimation
  $('.payg_estimation_client').val(payg?.['payg_estimation_client'] ?? '');
  $('.payg_estimation_partner').val(payg?.['payg_estimation_partner'] ?? '');

  // Personal Debt Rates
  $('.personal_debt_rate_mortgage_rates').val(personalRates?.['personal_debt_rate_mortgage_rates'] ?? '');
  $('.personal_debt_rate_years').val(personalRates?.['personal_debt_rate_years'] ?? '');
  $('.personal_debt_rate_personal_loans').val(personalRates?.['personal_debt_rate_personal_loans'] ?? '');
  $('.personal_debt_rate_personal_loans_years').val(personalRates?.['personal_debt_rate_personal_loans_years'] ?? '');
  $('.personal_debt_rate_car_loans').val(personalRates?.['personal_debt_rate_car_loans'] ?? '');
  $('.personal_debt_rate_car_loans_years').val(personalRates?.['personal_debt_rate_car_loans_years'] ?? '');

  // Investment Debt Rates
  $('.investment_debt_rates').val(investRates?.['investment_debt_rates'] ?? '');
  $('.investment_debt_rates_business_loans').val(investRates?.['investment_debt_rates_business_loans'] ?? '');
  $('.mortgage_existing_investment_properties').val(investRates?.['mortgage_existing_investment_properties'] ?? '');
  $('.mortgage_new_investment_properties').val(investRates?.['mortgage_new_investment_properties'] ?? '');

  $('.net_assets_market_value').val(netasset?.['net_assets_market_value'] ?? '0');
  $('.net_assets_client').val(netasset?.['net_assets_client'] ?? '0');
  $('.net_assets_partner').val(netasset?.['net_assets_partner'] ?? '0');

}

function fillCurrentPosition(response){
$('.equity_in_your_home').val(response['equity_in_your_home']);
$('.gross_anual_income_client').val(response['gross_anual_income_client']);
$('.gross_anual_income_partner').val(response['gross_anual_income_partner']);
$('.investment_portfolio_assets_business_net_value').val(response['investment_portfolio_assets_business_net_value']);
$('.investment_portfolio_assets_existing_investment_property').val(response['investment_portfolio_assets_existing_investment_property']);
$('.investment_portfolio_assets_long_term_savings').val(response['investment_portfolio_assets_long_term_savings']);
$('.investment_portfolio_assets_mortgage').val(response['investment_portfolio_assets_mortgage']);
$('.investment_portfolio_assets_shares').val(response['investment_portfolio_assets_shares']);
$('.investment_portfolio_assets_superannuation').val(response['investment_portfolio_assets_superannuation']);
$('.investment_portfolio_business_net_value').val(response['investment_portfolio_business_net_value']);
$('.investment_portfolio_current_net_financial_assets').val(response['investment_portfolio_current_net_financial_assets']);
$('.investment_portfolio_existing_investment_property').val(response['investment_portfolio_existing_investment_property']);
$('.investment_portfolio_long_term_savings').val(response['investment_portfolio_long_term_savings']);
$('.investment_portfolio_mortgage').val(response['investment_portfolio_mortgage']);
$('.investment_portfolio_net_financial_assets').val(response['investment_portfolio_net_financial_assets']);
$('.investment_portfolio_net_position').val(response['investment_portfolio_net_position']);
$('.investment_portfolio_repay_mortgage').val(response['investment_portfolio_repay_mortgage']);
$('.investment_portfolio_shares_net_value').val(response['investment_portfolio_shares_net_value']);
$('.investment_portfolio_superannuation_client_net_value').val(response['investment_portfolio_superannuation_client_net_value']);
$('.investment_portfolio_superannuation_partner_net_value').val(response['investment_portfolio_superannuation_partner_net_value']);
$('.investment_portfolio_total').val(response['investment_portfolio_total']);
$('.projected_value_of_your_home').val(response['projected_value_of_your_home']);
$('.total_houese_hold_income').val(response['total_houese_hold_income']);
$('.your_home_mortgage').val(response['your_home_mortgage']);
$('.your_home_value_of_your_home').val(response['your_home_value_of_your_home']);
}

function fillFinancialIndependaceAssumptionsDataForms(response){
$('.gross_household_income_per_annum').val(response['financialIndependance']['gross_household_income_per_annum'] );
$('.desired_current_income_required_retirement').val(response['financialIndependance']['desired_current_income_required_retirement']);
$('.annual_gross_houshold_income_required_in_retirement').val(response['financialIndependance']['annual_gross_houshold_income_required_in_retirement']);
$('.weekly_gross_household_income').val(response['financialIndependance']['weekly_gross_household_income']);
$('.age_this_year').val(response['financialIndependance']['age_this_year']);
$('.prefer_retirement_age').val(response['financialIndependance']['prefer_retirement_age']);
$('.years_to_achieve_financial_independence').val(response['financialIndependance']['years_to_achieve_financial_independence']);
$('.net_financial_assets').val(response['financialIndependance']['net_financial_assets']);
$('.total_investment_portfolio_required').val(response['financialIndependance']['total_investment_portfolio_required']);
$('.total_annual_household_income_retirement').val(response['financialIndependance']['total_annual_household_income_retirement']);
$('.equivalent_value_of_annual_household').val(response['financialIndependance']['equivalent_value_of_annual_household']);
$('.your_current_net_financial_assets_value').val(response['financialIndependance']['your_current_net_financial_assets_value']);
$('.annual_increase_in_net_financial_assets').val(response['financialIndependance']['annual_increase_in_net_financial_assets']);
$('.monthly_increase_in_net_financial_assets').val(response['financialIndependance']['monthly_increase_in_net_financial_assets']);
$('.weekly_increase_in_net_financial_assets').val(response['financialIndependance']['weekly_increase_in_net_financial_assets']);
$('.current_level_of_income_and_expenses').val(response['financialIndependance']['current_level_of_income_and_expenses']);
$('.total_investment_portfolio_achieve_annual_household_today').val(response['financialIndependance']['total_investment_portfolio_achieve_annual_household_today']);
$('.present_value_required').val(response['financialIndependance']['present_value_required']);

$('.annual_compound_growth_rate_investment_assets').val(response['assumptionData'][0]['annual_compound_growth_rate_investment_assets']);
$('.annual_inflation_rate').val(response['assumptionData'][0]['annual_inflation_rate']);
$('.income_investment_portfolio_assets').val(response['assumptionData'][0]['income_investment_portfolio_assets']);
$('.annual_interest_rate_mortgages').val(response['assumptionData'][0]['annual_interest_rate_mortgages']);
$('.annual_contribution_superannuation').val(response['assumptionData'][0]['annual_contribution_superannuation']);

}


 