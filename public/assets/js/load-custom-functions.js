
   




 $(document).ready(function(){

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

function FillSuperannuation(response){
  $('.gross_salary').val(response['SuperannuationDetails']['gross_salary']);
  $('.sg_rate').val(response['SuperannuationDetails']['sg_rate']);
  $('.annual_contribution').val(response['SuperannuationDetails']['annual_contribution']);
  $('.quarterly_contribution').val(response['SuperannuationDetails']['quarterly_contribution']);
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
}


function addHTML(count){
      let rowIdx = count;
        var add_investment_html = `<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
    <label>Investment Property</label>
    <select name="row[${rowIdx}][non_investment_owner]"  id="non-investment-owner" class="investment_property block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option value="Owner">Owner</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input client_percentage"  placeholder="0%" name="row[${rowIdx}][client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input partner_percentage"  placeholder="0%" name="row[${rowIdx}][partner_percentage]">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input market_value"  placeholder="0.00" name="row[${rowIdx}][market_value]">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input client"  placeholder="0.00" name="row[${rowIdx}][client]">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input partner"  placeholder="0.00" name="row[${rowIdx}][partner]">
  </div>
 <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input investment_id"  placeholder="0.00" name="row[${rowIdx}][investment_id]" >
  </div>
  <div>`;
    $('.investment-property').append(add_investment_html);
      rowIdx++;
}

function Add_Non_Investment_HTML(count){
      let rowIdx = count;
        var add_non_investment_html = `<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
    <label>Other Personal Assets</label>
    <select  id="non-investment-owner-asset" name="noninvestmentasset[${rowIdx}][other_personal_asset] "class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select non-investment-owner-asset ">
    <option selected>Owner</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input non_investment_asset_client_percentage"  placeholder="0%" name="noninvestmentasset[${rowIdx}][non_investment_asset_client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input non_investment_asset_partner_percentage"  name="noninvestmentasset[${rowIdx}][non_investment_asset_partner_percentage]" placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input non_investment_asset_market_value" name="noninvestmentasset[${rowIdx}][non_investment_asset_market_value]"  placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input non_investment_asset_client"  name="noninvestmentasset[${rowIdx}][non_investment_asset_client]" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input non_investment_asset_partner" name="noninvestmentasset[${rowIdx}][non_investment_asset_partner]"  placeholder="0.00">
  </div>
  <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input others_id" name="noninvestmentasset[${rowIdx}][others_id]"  placeholder="0.00" >
  </div>
  <div>`;
    $('.div-non-investment-property').append(add_non_investment_html);
      rowIdx++;
}


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
      addHTML(x);
  });

  $('.add-non-investment-property').click(function(e){
      e.preventDefault();
      var x = 1;
      Add_Non_Investment_HTML(x);
  });

     var appURL = window.location.origin;
     var details_id =  $('.details_id').val();

/*****************Save Details********************** */
 $(".btn-details").click(function(event){
          
    event.preventDefault();
    var formData = new FormData($('.clientdetails').get(0))
    formData.append('_method','POST');
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
      error: function(error)
      {
        console.log(error);
            //  $('input').each(function(){
            //   if($(this).val() == ""){
            //     $(this).css('border-color','red');
            //   }
                
            //  });
        Swal.fire({
        icon: "error",
        title: "Please provide all requested details",
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
    title: 'Changes successfully saved',
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
    $('.add-investment-property').css('display','none');                 
    $('.btn-details').css('display','none');
    $('.btn-update-details').css('display','block');
    var  investment_asset = (response['InvestmentAssetDetails']).length;
    var  other_personal_assets = (response['OtherPersonalAssets']).length;
    for(var x = 1; x < investment_asset; x++)
    {
       addHTML(x);
    }
    for(var x = 1; x < other_personal_assets; x++)
    {
       Add_Non_Investment_HTML(x);
    }
    response['InvestmentAssetDetails'].forEach((element,index) => {
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

      }
    },
    error: function(error) {
    console.error("AJAX Error: " + error);
    }
    });
        /************End Get Details******************************/
});/***end document***/
         



   

 
 