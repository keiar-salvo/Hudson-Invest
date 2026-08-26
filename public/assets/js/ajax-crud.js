
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
var income_investment_portfolio_assets = 0;
var annual_inflation_rate = 0;


/***************Get Assumption Rates*************************/
$.ajax({
  url: appURL + "/details",
  type: "GET",
  dataType: "json",
  success: function(response) {   
  console.log(response[0]);
  annual_growth_rate_invest_assets = response[0]['annual_compound_growth_rate_investment_assets'];
  annual_interest_rate_mortgages = response[0]['annual_interest_rate_mortgages'];
  $('.personal_debt_rate_mortgage_rates').val(annual_interest_rate_mortgages);
  $('.mortgage_existing_investment_properties').val(annual_interest_rate_mortgages);
  $('.mortgage_new_investment_properties').val(annual_interest_rate_mortgages);
   $('.mortgage_new_investment_properties').val(annual_interest_rate_mortgages);
   income_investment_portfolio_assets = response[0]['income_investment_portfolio_assets'];
   annual_inflation_rate = response[0]['annual_inflation_rate'];
  
}
});

/*****************Save Details********************** */
 $(".btn-details").click(function(event){

    event.preventDefault(); 
    
    var formData = new FormData($('.clientdetails').get(0))   

    // Calculate Future Values for Current Position Page
    currentPosition_and_financial_independance(formData,annual_growth_rate_invest_assets,income_investment_portfolio_assets,annual_inflation_rate);

    // console.log(formData);

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
    currentPosition_and_financial_independance(formData,annual_growth_rate_invest_assets);
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
  // console.log(response);
  if(response.status == 'no data available')
  {
    $('.btn-update-details').css('display','none');
    $('.btn-details').css('display','block');
                        
  }
  else{

    filldataforms(response);
                 
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

        
/************Get Current Position******************************/
$.ajax({
  url: appURL + "/currentposition/" + product,
  type: "GET",
  dataType: "json",
  success: function(response) {   
  // console.log(response);
  fillCurrentPosition(response);
    },
    error: function(error) {
    console.error("AJAX Error: " + error);
    }
    });
        /************End Get Details******************************/

$.ajax({
  url: appURL + "/financialindependance/" + product,
  type: "GET",
  dataType: "json",
  success: function(response) {   
  // console.log(response);
  // fillCurrerentPosition(response);
  console.log(response);
    },
    error: function(error) {
    console.error("AJAX Error: " + error);
    }
    });
        /************End Get Details******************************/
});/***end document***/
         



   

 
 