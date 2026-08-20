
 $(document).ready(function(){

function transactionID(length = 10) {
    const letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    let result = '';
    for (let i = 0; i < length; i++) {
        result += letters.charAt(Math.floor(Math.random() * letters.length));
    }
    return result;
}
// const lastSegment = appURL.substring(appURL.lastIndexOf('/') + 1);

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const product = urlParams.get('id')
if(product != null)
{
  $('.details_id').val(product);
}
else{
$('.details_id').val(transactionID());
}

  $('.add-investment-property').click(function(e){
      e.preventDefault();
      var x = 1;
      addHTML();
  });

  $('.add-non-investment-property').click(function(e){
      e.preventDefault();
      var x = 1;
      Add_Non_Investment_HTML();
  });

  $('.add-debt').click(function(e){
    e.preventDefault();
      var x = 1;
      var y= 2;
      Add_Other_Debt_HTML();
  });

  $('.add-credit-card').click(function(e){
    e.preventDefault();
      var x = 1;
      var y= 2;
      Add_Credit_Card_HTML();
  });

  $('.add-mortgage-investment-property').click(function(e){
    e.preventDefault();
      var x = 1;
      var y= 2;
      Add_Mortgage_Investment_Property();
  });

  $('.add-personal-other-debts').click(function(e){
    e.preventDefault();
      var x = 1;
      var y= 2;
       Add_Personal_Other_Debts();
  });

  $('.add-personal-credit-cards').click(function(e){
    e.preventDefault();
      var x = 1;
      var y= 2;
       Add_Personal_Credit_Cards();
  });


     var appURL = window.location.origin;
     var details_id =  $('.details_id').val();
var annual_growth_rate_invest_assets = 0;
/***************Get Assumption Rates*************************/
$.ajax({
  url: appURL + "/details",
  type: "GET",
  dataType: "json",
  success: function(response) {   
  console.log("Rates:" + response);
  annual_growth_rate_invest_assets = response[0]['annual_compound_growth_rate_investment_assets'];
}
});

/*****************Save Details********************** */
 $(".btn-details").click(function(event){

    event.preventDefault(); 
    // Get Total House Hold Income
    var gross_annual_income_client = parseFloat($('.total_income_client_annual').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var gross_annual_income_partner = parseFloat($('.total_income_partner_annual').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var total_household_income = gross_annual_income_client + gross_annual_income_partner;
    var formatted_household_income = total_household_income.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Value of Your Home
    var principle_residence_client = parseFloat($('.principle_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var principle_residence_partner = parseFloat($('.principle_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var your_value_home = principle_residence_client + principle_residence_partner;
    
    var formatted_value_your_home =  your_value_home.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Your Home Mortgage
    var your_home_mortgage = $('.mortgage_market_value').val().toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Equity in Your Home
    var cleanMortgage = your_home_mortgage?.replace(/[^0-9.-]/g, '') || 0;
    var equity = your_value_home  - cleanMortgage;
    var formatted_equity_in_your_home = equity.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Investment Portfolio Long Term Savings
    var long_term_savings_client = parseFloat($('.long_term_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var long_term_savings_partner = parseFloat($('.long_term_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var investment_portfolio_long_term_savings = long_term_savings_client + long_term_savings_partner;
    var formatted_investment_long_term_savings = investment_portfolio_long_term_savings.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Shares / Managed Funds Net Value
    var share_fund_client = parseFloat($('.shares_fund_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var share_fund_partner = parseFloat($('.shares_fund_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var margin_investment_client  = parseFloat($('.margin_investment_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var margin_investment_partner  = parseFloat($('.margin_investment_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var investment_portfolio_shares_net_value  = share_fund_client + share_fund_partner - margin_investment_client - margin_investment_partner;
    var formatted_investment_portfolio_shares_net_value =  investment_portfolio_shares_net_value.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Business Net Value
    var business_client  = parseFloat($('.business_client ').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var business_partner  = parseFloat($('.business_partner ').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var business_loans_client   = parseFloat($('.business_loans_client ').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var business_loans_partner  = parseFloat($('.business_loans_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var investment_portfolio_business_net_value  = business_client + business_partner - business_loans_client - business_loans_partner;
    var formatted_investment_portfolio_business_net_value =  investment_portfolio_business_net_value.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Existing Investment Property Portfolio
    var total_investment_portfolio = 0;
    var formatted_investment_portfolio_existing_investment_property = 0;

    $('.form-row-investment').each(function() {
        let row = $(this);
        
    
        // let marketVal = parseFloat(row.find('.market_value').val()?.replace(/,/g, '')) || 0;
        let clientVal = parseFloat(row.find('.client').val()?.replace(/,/g, '')) || 0;
        let partnerVal = parseFloat(row.find('.partner').val()?.replace(/,/g, '')) || 0;

   
        total_investment_portfolio += clientVal + partnerVal
        formatted_investment_portfolio_existing_investment_property = total_investment_portfolio.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
        
    });

    // Get Total Porfolio Mortgage
    var total_investment_portfolio_mortgage = 0;
    var formatted_investment_portfolio_mortgage = 0;
      $('.form-row-mortgage-investment').each(function() {
        let row = $(this);
        
        let mortgageMarketVal = parseFloat(row.find('.mortgage_investment_market_value').val()?.replace(/,/g, '')) || 0;
        let mortgageClientVal = parseFloat(row.find('.mortgage_investment_client').val()?.replace(/,/g, '')) || 0;
        let mortgagePartnerVal = parseFloat(row.find('.mortgage_investment_partner').val()?.replace(/,/g, '')) || 0;

      
        total_investment_portfolio_mortgage += mortgageClientVal + mortgagePartnerVal;
        
      
    });
    
      formatted_investment_portfolio_mortgage = total_investment_portfolio_mortgage.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 

 
    });

    // Get Total Investment Portfolio Total
    var total_long_term_savings = parseFloat(formatted_investment_long_term_savings?.replace(/,/g, '')) || 0; 
    var total_superannuation_client = parseFloat($('.superannuation_client_client').val()?.replace(/,/g, '')) || 0; 
    var total_superannuation_partner_partner = parseFloat($('.superannuation_partner_partner').val()?.replace(/,/g, '')) || 0; 
    var total_shares_net_value = parseFloat(formatted_investment_portfolio_shares_net_value?.replace(/,/g, '')) || 0; 
    var total_business_net_value = parseFloat(formatted_investment_portfolio_business_net_value?.replace(/,/g, '')) || 0; 
    var total_existing_invesment_property = parseFloat(formatted_investment_portfolio_existing_investment_property?.replace(/,/g, '')) || 0; 
    var investment_portfolio_total = total_long_term_savings + total_superannuation_client + total_superannuation_partner_partner + total_shares_net_value + total_business_net_value + total_existing_invesment_property;

    var formatted_investment_portfolio_total = investment_portfolio_total.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

    // Get Total Investment Portfolio Net Position
    var total_investment_porfolio_net_position = investment_portfolio_total + total_investment_portfolio_mortgage;
    var formatted_investment_portfolio_net_position = total_investment_porfolio_net_position.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

    // Get Total Current Net Financial Assets
    var repay_mortgage  = parseFloat($('.mortgage_market_value').val()?.replace(/,/g, '')) || 0;
    var total_investment_portfolio_net_position = total_investment_porfolio_net_position;
    var cuurent_net_financial_assets =  total_investment_portfolio_net_position - repay_mortgage;
    var formatted_cuurent_net_financial_assets = cuurent_net_financial_assets.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

   let rate = parseFloat(annual_growth_rate_invest_assets) / 100; 


let periods = parseInt($('.years_to_target_age').val()) || 0;


let pv = parseFloat(formatted_value_your_home?.replace(/,/g, '')) || 0;
let pValue = Math.abs(pv);

// 3. Debugging logs (Check your browser console to make sure PV says 1100000!)
console.log("Rate: " + rate);       // Should print: 0.045
console.log("Period: " + periods);   // Should print: 22
console.log("PV: " + pValue);       // Should print: 1100000


let futureValue = pValue * Math.pow((1 + rate), periods);


var formatted_futureValue = futureValue.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
});

    var formData = new FormData($('.clientdetails').get(0))

    formData.append('_method','POST');
    formData.append('gross_anual_income_client',$('.total_income_client_annual').val());
    formData.append('gross_anual_income_partner',$('.total_income_partner_annual').val());
    formData.append('total_houese_hold_income',formatted_household_income);
    formData.append('your_home_value_of_your_home',formatted_value_your_home);
    formData.append('your_home_mortgage',your_home_mortgage);
    formData.append('equity_in_your_home',formatted_equity_in_your_home);
    formData.append('investment_portfolio_superannuation_client_net_value',$('.superannuation_client_client').val());
    formData.append('investment_portfolio_superannuation_partner_net_value',$('.superannuation_partner_partner').val());
    formData.append('investment_portfolio_shares_net_value',formatted_investment_portfolio_shares_net_value);
    formData.append('investment_portfolio_business_net_value',formatted_investment_portfolio_business_net_value);
    formData.append('investment_portfolio_existing_investment_property',formatted_investment_portfolio_existing_investment_property);
    formData.append('investment_portfolio_mortgage',formatted_investment_portfolio_mortgage);
    formData.append('investment_portfolio_total',formatted_investment_portfolio_total);
    formData.append('investment_portfolio_net_position',formatted_investment_portfolio_net_position);
    formData.append('investment_portfolio_repay_mortgage',$('.mortgage_market_value').val().toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    }));

    formData.append('investment_portfolio_current_net_financial_assets',formatted_cuurent_net_financial_assets);
     formData.append('projected_value_of_your_home',formatted_futureValue);

    console.log(formData);

    $.ajax({
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },      
    url: appURL + "/details",
    method: "POST",
    data:formData,       
    processData: false,
    contentType: false,
    success: function(response)
    {
              //   $('input').each(function(){
              // if($(this).val() != ""){
              //   $(this).css('border-color','inherit');
              // }
              // });
          
            // $('.btn-details').css('display','none');
            // $('.btn-update-details').css('display','block');
      
    Swal.fire({
    title: "Client Details successfully saved",
    icon: "success",
    draggable: true
    });
    $('.details_id').val(transactionID());
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
/*****************End Save Details********************** */

/***************Update Details****************************/
$(".btn-update-details").click(function(event){       
    event.preventDefault();
    var formData = new FormData($('.clientdetails').get(0));
    formData.append('_method','POST');
    $.ajax({
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    url: appURL + "/details/" + details_id,
    method: "POST",
    data:formData,       
    processData: false,
    contentType: false,  
    success: function(response)
      {
              //   $('input').each(function(){
              // if($(this).val() != ""){
              //   $(this).css('border-color','inherit');
              // }
              // });
          
    Swal.fire({
    title: 'Changes applied',
    icon: 'success',
    confirmButtonText: 'OK'
    }).then((result) => {
    if (result.isConfirmed) {
    window.opener.location.reload();
                // window.top.close();
    }
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
/***************End Update Details****************************/




/************Get Details******************************/
$.ajax({
  url: appURL + "/details/" + details_id,
  type: "GET",
  dataType: "json",
  success: function(response) {   
  console.log(response);
  if(response.status == 'no data available')
  {
    $('.btn-update-details').css('display','none');
    $('.btn-details').css('display','block');
                        
  }
  else{
    FillForms(response);
    Fill_Income(response);
    FillSuperannuation(response);
    FillNonInvestmentAsset(response);
    FillInvestmentAsset(response);
    FillLiabilitiesNonInvestment(response);
    FillInvestmentRelatedLiabilities(response);
    FillPersonalDebtRates(response);
    FillPaygEstimation(response);
    FillInvestmentRelatedLiabilities(response);
    FillInvestmentDebtRates(response);
    FillTotalLiabilites(response);

    $('.add-investment-property').css('display','none');                 
    $('.btn-details').css('display','none');
    $('.btn-update-details').css('display','block');
    var  investment_asset = (response['InvestmentPropertyAssetDetails']).length;
    var  other_personal_assets = (response['OtherPersonalAssets']).length;
    var  other_debts = (response['OtherDebts']).length;
    var  credit_cards = (response['CreditCards']).length;
    var investment_related_liabilities = (response['MortgageInvestmentProperty']).length;
    var personal_other_debt_rates = (response['PersonalOtherDebts']).length;
    var personal_credit_cards = (response['PersonalCreditCards']).length;
    for(var x = 1; x < personal_other_debt_rates; x++)
    {
       addHTML(x);
    }
    for(var x = 1; x < investment_asset; x++)
    {
       addHTML(x);
    }
    for(var x = 1; x < other_personal_assets; x++)
    {
       Add_Non_Investment_HTML(x);
    }

    for(var x = 1; x < other_debts; x++)
    {
       Add_Other_Debt_HTML(x);
    }
    for(var x = 1; x < credit_cards; x++)
    {
       Add_Credit_Card_HTML(x);
    }

    for(var x = 1; x < investment_related_liabilities; x++)
    {
       Add_Mortgage_Investment_Property(x);
    }

    for(var x = 1; x < personal_other_debt_rates; x++)
    {
       Add_Personal_Other_Debts(x);
    }

    for(var x = 1; x < personal_credit_cards; x++)
    {
       Add_Personal_Credit_Cards(x);
    }
    response['InvestmentPropertyAssetDetails'].forEach((element,index) => {
      $('.investment_property').eq(index).val(element.investment_property);
      $('.client_percentage').eq(index).val(element.client_percentage);
      $('.partner_percentage').eq(index).val(element.partner_percentage);
      $('.market_value').eq(index).val(element.market_value);
      $('.client').eq(index).val(element.client);
      $('.partner').eq(index).val(element.partner);
      $('.investment_id').eq(index).val(element.id)
      });

      response['OtherPersonalAssets'].forEach((element,index) => {
      $('.non-investment-owner-asset').eq(index).val(element.other_personal_asset);
      $('.non_investment_asset_client_percentage').eq(index).val(element.non_investment_asset_client_percentage);
      $('.non_investment_asset_partner_percentage').eq(index).val(element.non_investment_asset_partner_percentage);
      $('.non_investment_asset_market_value').eq(index).val(element.non_investment_asset_market_value);
      $('.non_investment_asset_client').eq(index).val(element.non_investment_asset_client);
      $('.non_investment_asset_partner').eq(index).val(element.non_investment_asset_partner);
      $('.others_id').eq(index).val(element.id)
      });

      response['OtherDebts'].forEach((element,index) => {
      $('.other_debt').eq(index).val(element.other_debt);
      $('.other_debt_client_percentage').eq(index).val(element.other_debt_client_percentage);
      $('.other_debt_partner_percentage').eq(index).val(element.other_debt_partner_percentage);
      $('.other_debt_market_value').eq(index).val(element.other_debt_market_value);
      $('.other_debt_client').eq(index).val(element.other_debt_client);
      $('.other_debt_parnter').eq(index).val(element.other_debt_parnter);
      $('.other_debt_id').eq(index).val(element.id)
      });

      response['CreditCards'].forEach((element,index) => {
      $('.credit_card').eq(index).val(element.credit_card);
      $('.credit_card_client_percentage').eq(index).val(element.credit_card_client_percentage);
      $('.credit_card_partner_percentage').eq(index).val(element.credit_card_partner_percentage);
      $('.credit_card_market_value').eq(index).val(element.credit_card_market_value);
      $('.credit_card_client').eq(index).val(element.credit_card_client);
      $('.credit_card_partner').eq(index).val(element.credit_card_partner);
      $('.credit_card_id').eq(index).val(element.id)
      });

      response['MortgageInvestmentProperty'].forEach((element,index) => {
      $('.mortgage_investment').eq(index).val(element.mortgage_investment);
      $('.mortgage_investment_client_percentage').eq(index).val(element.mortgage_investment_client_percentage);
      $('.mortgage_investment_partner_percentage').eq(index).val(element.mortgage_investment_partner_percentage);
      $('.mortgage_investment_market_value').eq(index).val(element.mortgage_investment_market_value);
      $('.mortgage_investment_client').eq(index).val(element.mortgage_investment_client);
      $('.mortgage_investment_partner').eq(index).val(element.mortgage_investment_partner);
      $('.mortgage_investment_id').eq(index).val(element.id)
      });

      response['PersonalOtherDebts'].forEach((element,index) => {
      $('.personal_debt_rate_other_debts').eq(index).val(element.personal_debt_rate_other_debts);
      $('.personal_debt_rate_other_debt_years').eq(index).val(element.personal_debt_rate_other_debt_years);
      $('.debt_rates_other_id').eq(index).val(element.id)
      });

      response['PersonalCreditCards'].forEach((element,index) => {
      $('.personal_debt_rate_credit_card').eq(index).val(element.personal_debt_rate_credit_card);
      $('.personal_debt_rate_credit_card_years').eq(index).val(element.personal_debt_rate_credit_card_years);
      $('.debt_rates_credit_card_id').eq(index).val(element.id)
      });

      }
    },
    error: function(error) {
    console.error("AJAX Error: " + error);
    }
    });
        /************End Get Details******************************/
});/***end document***/
         



   

 
 