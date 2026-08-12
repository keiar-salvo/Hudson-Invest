 function FillForms(response)
{
  $('.name').val(response['personalDetails']['name']);
  $('.residential_address').val(response['personalDetails']['residential_address']);
  $('.phone_home').val(response['personalDetails']['phone_home']);
  $('.phone_mobile').val(response['personalDetails']['phone_mobile']);
  $('.email').val(response['personalDetails']['email']);
  $('.age_client').val(response['personalDetails']['age_client']);
  $('.age_partner').val(response['personalDetails']['age_partner']);
  $('.age_average').val(response['personalDetails']['age_average']);
  $('.amount_per_week').val(response['personalDetails']['amount_per_week']);
  $('.initial_appointment_date').val(response['personalDetails']['initial_appointment_date']);
  $('.desired_retirement_age').val(response['personalDetails']['desired_retirement_age']);
  $('.in_seven_years').val(response['personalDetails']['in_seven_years']);
  $('.in_fourteen_years').val(response['personalDetails']['in_fourteen_years']);
  $('.in_twenty_one_years').val(response['personalDetails']['in_twenty_one_years']);
  $('.target_age').val(response['financialDetails']['target_age']);
  $('.years_to_target_age').val(response['financialDetails']['years_to_target_age']);
  $('.desired_retirement_date').val(response['financialDetails']['desired_retirement_date']);
  $('.current_income_required_in_retirement').val(response['financialDetails']['current_income_required_in_retirement']);
 
}

function Fill_Income(response){
  $('#salary_frequency').val(response['IncomeDetails']['salary_frequency']);
  $('.salary_client').val(response['IncomeDetails']['salary_client']);
  $('.salary_partner').val(response['IncomeDetails']['salary_partner']);
  $('.salary_client_annual').val(response['IncomeDetails']['salary_client_annual']);
  $('.salary_partner_annual').val(response['IncomeDetails']['salary_partner_annual']);

  $('#bonus_frequency').val(response['IncomeDetails']['bonus_frequency']);
  $('.bonus_client').val(response['IncomeDetails']['bonus_client']);
  $('.bonus_partner').val(response['IncomeDetails']['bonus_partner']);
  $('.bonus_client_annual').val(response['IncomeDetails']['bonus_client_annual']);
  $('.bonus_partner_annual').val(response['IncomeDetails']['bonus_partner_annual']);

  $('#interest_income_frequency').val(response['IncomeDetails']['interest_income_frequency']);
  $('.interest_income_client').val(response['IncomeDetails']['interest_income_client']);
  $('.interest_income_partner').val(response['IncomeDetails']['interest_income_partner']);
  $('.interest_income_client_annual').val(response['IncomeDetails']['interest_income_client_annual']);
  $('.interest_income_partner_annual').val(response['IncomeDetails']['interest_income_partner_annual']);

  $('#rental_income_frequency').val(response['IncomeDetails']['rental_income_frequency']);
  $('.rental_income_client').val(response['IncomeDetails']['rental_income_client']);
  $('.rental_income_partner').val(response['IncomeDetails']['rental_income_partner']);
  $('.rental_income_client_annual').val(response['IncomeDetails']['rental_income_client_annual']);
  $('.rental_income_partner_annual').val(response['IncomeDetails']['rental_income_partner_annual']);

  $('#dividend_income_frequency').val(response['IncomeDetails']['dividend_income_frequency']);
  $('.dividend_income_client').val(response['IncomeDetails']['dividend_income_client']);
  $('.dividend_income_partner').val(response['IncomeDetails']['dividend_income_partner']);
  $('.dividend_income_client_annual').val(response['IncomeDetails']['dividend_income_client_annual']);
  $('.dividend_income_partner_annual').val(response['IncomeDetails']['dividend_income_partner_annual']);

  $('#ss_income_frequency').val(response['IncomeDetails']['ss_income_frequency']);
  $('.ss_income_client').val(response['IncomeDetails']['ss_income_client']);
  $('.ss_income_partner').val(response['IncomeDetails']['ss_income_partner']);
  $('.ss_income_client_annual').val(response['IncomeDetails']['ss_income_client_annual']);
  $('.ss_income_partner_annual').val(response['IncomeDetails']['ss_income_partner_annual']);

  $('#business_income_frequency').val(response['IncomeDetails']['business_income_frequency']);
  $('.business_income_client').val(response['IncomeDetails']['business_income_client']);
  $('.business_income_partner').val(response['IncomeDetails']['business_income_partner']);
  $('.business_income_client_annual').val(response['IncomeDetails']['business_income_client_annual']);
  $('.business_income_partner_annual').val(response['IncomeDetails']['business_income_partner_annual']);

  $('#other_income_frequency').val(response['IncomeDetails']['other_income_frequency']);
  $('.other_income_client').val(response['IncomeDetails']['other_income_client']);
  $('.other_income_partner').val(response['IncomeDetails']['other_income_partner']);
  $('.other_income_client_annual').val(response['IncomeDetails']['other_income_client_annual']);
  $('.other_income_partner_annual').val(response['IncomeDetails']['other_income_partner_annual']);

  $('.total_income_client_annual').val(response['IncomeDetails']['total_income_client_annual']);
  $('.total_income_partner_annual').val(response['IncomeDetails']['total_income_partner_annual']);

}

function FillTotalLiabilites(response){
  $('.total_liabilities_market_value').val(response['TotalLiabilitites']['total_liabilities_market_value']); 
  $('.total_liabilities_client').val(response['TotalLiabilitites']['total_liabilities_client']); 
  $('.total_liabilities_partner').val(response['TotalLiabilitites']['total_liabilities_partner']); 
}

function FillSuperannuation(response){
  $('.gross_salary').val(response['SuperannuationDetails']['gross_salary']);
  $('.sg_rate').val(response['SuperannuationDetails']['sg_rate']);
  $('.annual_contribution').val(response['SuperannuationDetails']['annual_contribution']);
  $('.quarterly_contribution').val(response['SuperannuationDetails']['quarterly_contribution']);
  $('.partner_gross_salary').val(response['SuperannuationDetails']['partner_gross_salary']);
  $('.partner_sg_rate').val(response['SuperannuationDetails']['partner_sg_rate']);
  $('.partner_annual_contribution').val(response['SuperannuationDetails']['partner_annual_contribution']);
  $('.partner_quarterly_contribution').val(response['SuperannuationDetails']['partner_quarterly_contribution']);
  $('.grand_total_annual').val(response['SuperannuationDetails']['grand_total_annual']);
  $('.grand_total_quarterly').val(response['SuperannuationDetails']['grand_total_quarterly']);
}

function FillNonInvestmentAsset(response){
  $('.principle_residence').val(response['NonInvestmentAssets']['principle_residence']);
  $('.principle_client_percentage').val(response['NonInvestmentAssets']['principle_client_percentage']);
  $('.principle_partner_percentage').val(response['NonInvestmentAssets']['principle_partner_percentage']);
  $('.principle_market_value').val(response['NonInvestmentAssets']['principle_market_value']);
  $('.principle_client').val(response['NonInvestmentAssets']['principle_client']);
  $('.principle_partner').val(response['NonInvestmentAssets']['principle_partner']);
  $('.cash_everyday').val(response['NonInvestmentAssets']['cash_everyday']);
  $('.cash_client_percentage').val(response['NonInvestmentAssets']['cash_client_percentage']);
  $('.cash_partner_percentage').val(response['NonInvestmentAssets']['cash_partner_percentage']);
  $('.cash_market_value').val(response['NonInvestmentAssets']['cash_market_value']);
  $('.cash_client').val(response['NonInvestmentAssets']['cash_client']);
  $('.cash_partner').val(response['NonInvestmentAssets']['cash_partner']);
  $('.total_non_investment_market_value').val(response['NonInvestmentAssets']['total_market_value']);
  $('.total_non_investment_client').val(response['NonInvestmentAssets']['total_client']);
  $('.total_non_investment_partner').val(response['NonInvestmentAssets']['total_partner']);
}

function FillInvestmentAsset(response){
  $('.long_term_investment_asset').val(response['InvestmentAssets']['long_term_investment_asset']);
  $('.long_term_client_percentage').val(response['InvestmentAssets']['long_term_client_percentage']);
  $('.long_term_partner_percentage').val(response['InvestmentAssets']['long_term_partner_percentage']);
  $('.long_term_market_value').val(response['InvestmentAssets']['long_term_market_value']);
  $('.long_term_client').val(response['InvestmentAssets']['long_term_client']);
  $('.long_term_partner').val(response['InvestmentAssets']['long_term_partner']);
  $('.superannuation_client_net').val(response['InvestmentAssets']['superannuation_client_net']);
  $('.superannuation_client_client_percentage').val(response['InvestmentAssets']['superannuation_client_client_percentage']);
  $('.superannuation_client_partner_percentage').val(response['InvestmentAssets']['superannuation_client_partner_percentage']);
  $('.superannuation_client_market_value').val(response['InvestmentAssets']['superannuation_client_market_value']);
  $('.superannuation_client_client').val(response['InvestmentAssets']['superannuation_client_client']);
  $('.superannuation_client_partner').val(response['InvestmentAssets']['superannuation_client_partner']);
  $('.superannuation_partner_net').val(response['InvestmentAssets']['superannuation_partner_net']);
  $('.superannuation_partner_client_percentage').val(response['InvestmentAssets']['superannuation_partner_client_percentage']);
  $('.superannuation_partner_parnter_percentage').val(response['InvestmentAssets']['superannuation_partner_parnter_percentage']);
  $('.superannuation_partner_market_value').val(response['InvestmentAssets']['superannuation_partner_market_value']);
  $('.superannuation_partner_client').val(response['InvestmentAssets']['superannuation_partner_client']);
  $('.superannuation_partner_partner').val(response['InvestmentAssets']['superannuation_partner_partner']);
  $('.shares_fund').val(response['InvestmentAssets']['shares_fund']);
  $('.shares_fund_client_percentage').val(response['InvestmentAssets']['shares_fund_client_percentage']);
  $('.shares_fund_partner_percentage').val(response['InvestmentAssets']['shares_fund_partner_percentage']);
  $('.shares_fund_market_value').val(response['InvestmentAssets']['shares_fund_market_value']);
  $('.shares_fund_client').val(response['InvestmentAssets']['shares_fund_client']);
  $('.shares_fund_partner').val(response['InvestmentAssets']['shares_fund_partner']);
  $('.business').val(response['InvestmentAssets']['business']);
  $('.business_client_percentage').val(response['InvestmentAssets']['business_client_percentage']);
  $('.business_partner_percentage').val(response['InvestmentAssets']['business_partner_percentage']);
  $('.business_market_value').val(response['InvestmentAssets']['business_market_value']);
  $('.business_client').val(response['InvestmentAssets']['business_client']);
  $('.business_partner').val(response['InvestmentAssets']['business_partner']);
  $('.total_investment_asset_market_value').val(response['InvestmentAssets']['total_investment_asset_market_value']);
  $('.total_investment_asset_client').val(response['InvestmentAssets']['total_investment_asset_client']);
  $('.total_investment_asset_partner').val(response['InvestmentAssets']['total_investment_asset_partner']);
  $('.total_asset_market_value').val(response['InvestmentAssets']['total_asset_market_value']);
  $('.total_asset_client').val(response['InvestmentAssets']['total_asset_client']);
  $('.total_asset_partner').val(response['InvestmentAssets']['total_asset_partner']);
}

function FillLiabilitiesNonInvestment(response){
    $('.mortgage_residence').val(response['LiabilitiesNonInvestment']['mortgage_residence']);
    $('.mortgage_client_percentage').val(response['LiabilitiesNonInvestment']['mortgage_client_percentage']);
    $('.mortgage_partner_percentage').val(response['LiabilitiesNonInvestment']['mortgage_partner_percentage']);
    $('.mortgage_market_value').val(response['LiabilitiesNonInvestment']['mortgage_market_value']);
    $('.mortgage_client').val(response['LiabilitiesNonInvestment']['mortgage_client']);
    $('.mortgage_partner').val(response['LiabilitiesNonInvestment']['mortgage_partner']);
    $('.personal_loans').val(response['LiabilitiesNonInvestment']['personal_loans']);
    $('.personal_loans_client_percentage').val(response['LiabilitiesNonInvestment']['personal_loans_client_percentage']);
    $('.personal_loans_partner_percentage').val(response['LiabilitiesNonInvestment']['personal_loans_partner_percentage']);
    $('.personal_loans_market_value').val(response['LiabilitiesNonInvestment']['personal_loans_market_value']);
    $('.personal_loans_client').val(response['LiabilitiesNonInvestment']['personal_loans_client']);
    $('.personal_loans_partner').val(response['LiabilitiesNonInvestment']['personal_loans_partner']);
    $('.car_loans').val(response['LiabilitiesNonInvestment']['car_loans']);
    $('.car_loans_client_percentage').val(response['LiabilitiesNonInvestment']['car_loans_client_percentage']);
    $('.car_loans_partner_percentage').val(response['LiabilitiesNonInvestment']['car_loans_partner_percentage']);
    $('.car_loans_market_value').val(response['LiabilitiesNonInvestment']['car_loans_market_value']);
    $('.car_loans_client').val(response['LiabilitiesNonInvestment']['car_loans_client']);
    $('.car_loans_partner').val(response['LiabilitiesNonInvestment']['car_loans_partner']);
    $('.total_non_invesment_liabilities_market_value').val(response['LiabilitiesNonInvestment']['total_non_invesment_liabilities_market_value']);
    $('.total_non_invesment_liabilities_client').val(response['LiabilitiesNonInvestment']['total_non_invesment_liabilities_client']);
    $('.total_non_invesment_liabilities_partner').val(response['LiabilitiesNonInvestment']['total_non_invesment_liabilities_partner']);
 
 
}

function FillInvestmentRelatedLiabilities(response){
    $('.margin_investment_loans').val(response['InvestmentRelatedLiabilities']['margin_investment_loans']);
    $('.margin_investment_client_percentage').val(response['InvestmentRelatedLiabilities']['margin_investment_client_percentage']);
    $('.margin_investment_partner_percentage').val(response['InvestmentRelatedLiabilities']['margin_investment_partner_percentage']);
    $('.margin_investment_market_value').val(response['InvestmentRelatedLiabilities']['margin_investment_market_value']);
    $('.margin_investment_client').val(response['InvestmentRelatedLiabilities']['margin_investment_client']);
    $('.margin_investment_partner').val(response['InvestmentRelatedLiabilities']['margin_investment_partner']);
    $('.business_loans').val(response['InvestmentRelatedLiabilities']['business_loans']);
    $('.business_loans_client_percentage').val(response['InvestmentRelatedLiabilities']['business_loans_client_percentage']);
    $('.business_loans_partner_percentage').val(response['InvestmentRelatedLiabilities']['business_loans_partner_percentage']);
    $('.business_loans_market_value').val(response['InvestmentRelatedLiabilities']['business_loans_market_value']);
    $('.business_loans_client').val(response['InvestmentRelatedLiabilities']['business_loans_client']);
    $('.business_loans_partner').val(response['InvestmentRelatedLiabilities']['business_loans_partner']);
}

function FillPaygEstimation(response){
   $('.payg_estimation_client').val(response['PaygEstimation']['payg_estimation_client']);
   $('.payg_estimation_partner').val(response['PaygEstimation']['payg_estimation_partner']);
}

function FillPersonalDebtRates(response){
  $('.personal_debt_rate_mortgage_rates').val(response['PersonalDebtRates']['personal_debt_rate_mortgage_rates']);
  $('.personal_debt_rate_years').val(response['PersonalDebtRates']['personal_debt_rate_years']);
  $('.personal_debt_rate_personal_loans').val(response['PersonalDebtRates']['personal_debt_rate_personal_loans']);
  $('.personal_debt_rate_personal_loans_years').val(response['PersonalDebtRates']['personal_debt_rate_personal_loans_years']);
  $('.personal_debt_rate_car_loans').val(response['PersonalDebtRates']['personal_debt_rate_car_loans']);
  $('.personal_debt_rate_car_loans_years').val(response['PersonalDebtRates']['personal_debt_rate_car_loans_years']);

}

function FillInvestmentDebtRates(response){
    $('.investment_debt_rates').val(response['InvestmentDebtRates']['investment_debt_rates']);
    $('.investment_debt_rates_business_loans').val(response['InvestmentDebtRates']['investment_debt_rates_business_loans']);
    $('.mortgage_existing_investment_properties').val(response['InvestmentDebtRates']['mortgage_existing_investment_properties']);
    $('.mortgage_new_investment_properties').val(response['InvestmentDebtRates']['mortgage_new_investment_properties']);
}