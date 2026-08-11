$(document).ready(function(){
   
$('.age_client').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;

   var client = $('.age_client').val();
   var partner = $('.age_partner').val();
   if(client != "" && partner != "")
   {
    var age_average = (partner  === 0) ? client : (client + partner) / 2;
    $('.age_average').val(age_average);
   }
   
});
$('.age_client').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
       var client = $('.age_client').val();
   var partner = $('.age_partner').val();
   if(client != "" && partner != "")
   {
    var age_average = (partner  === 0) ? client : (client + partner) / 2;
    $('.age_average').val(age_average);
   }
   
});

$('.age_partner').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.age_partner').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
       var client = $('.age_client').val();
   var partner = $('.age_partner').val();
   if(client != "" && partner != "")
   {
   
    if(partner === 0)
    {
      age_average = 0;
    }
    else{
      age_average =parseInt(client)  + parseInt(partner)  / 2;
    }
    $('.age_average').val(Math.trunc(age_average));
   }
   
});

$('.age_average').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.age_average').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
});

$('.target_age').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.target_age').on('keyup', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();

        
    }
    var target_age = $('.target_age').val();
    var age_average = $('.age_average').val();
    console.log(target_age);
    var years_to_target_age = parseInt(target_age) - parseInt(age_average);
    $('.years_to_target_age').val(Math.round(years_to_target_age) );




    var dateVal = $('.initial_appointment_date').val();
// alert($('.years_to_target_age').val());
  if(dateVal != "")
  {
    if($('.years_to_target_age').val() != "")
    {
  let desired_retirment_age = new Date(dateVal);
    
  // parseInt($(this).val())
   desired_retirment_age.setFullYear(desired_retirment_age.getFullYear() + parseInt($('.years_to_target_age').val()));
    
   
    let desiredyearTwentyOne = desired_retirment_age.getFullYear();
    let desireMonth = String(desired_retirment_age.getMonth() + 1).padStart(2, '0');
    let desiredDay = String(desired_retirment_age.getDate()).padStart(2, '0');
    let newdesiredDayMonthYear = `${desireMonth}/${desiredDay}/${desiredyearTwentyOne}`;

      // var desired_result = dateVal + (parseFloat($(this).val) * 365);

    $('.desired_retirement_age').val(newdesiredDayMonthYear);
    $('.desired_retirement_date').val(newdesiredDayMonthYear);
    }
    else{
      $('.desired_retirement_age').val("mm/dd/yyyy");
      $('.desired_retirement_date').val("mm/dd/yyyy");
    }
    
  }
  else {
return false;
  }
});

$('.years_to_target_age').keypress(function (e) {
   if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
   
});
$('.years_to_target_age').on('keydown', function (e) {
   if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||

        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
       
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return; 
    }

  
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
    if (this.value.length >= 2 && window.getSelection().toString() === "") {
        e.preventDefault();
    }
});

$('.current_income_required_in_retirement').on('keypress',function(event){
     if(event.which < 46 || event.which >= 58 || event.which == 47) {
    event.preventDefault();
  }

  if(event.which == 46 && $(this).val().indexOf('.') != -1) {
    this.value = '' ;
  }  
});
$('.initial_appointment_date').on('change',function(){
var dateVal = $('.initial_appointment_date').val();

if (dateVal) {
   
    let d = new Date(dateVal);
    
  
    d.setFullYear(d.getFullYear() + 7);
    
   
    let year = d.getFullYear();
    let month = String(d.getMonth() + 1).padStart(2, '0');
    let day = String(d.getDate()).padStart(2, '0');
    let newDateStr = `${month}/${day}/${year}`;
    
    
    $('.in_seven_years').val(newDateStr);

    let dateFourteen = new Date(dateVal);
    
    
   dateFourteen.setFullYear(dateFourteen.getFullYear() + 14);
  
    let yearFourteen = dateFourteen.getFullYear();
    let monthFourteen = String(d.getMonth() + 1).padStart(2, '0');
    let dayFourteen = String(d.getDate()).padStart(2, '0');
    let newDateStrFourteen = `${monthFourteen}/${dayFourteen}/${yearFourteen}`;
   
    $('.in_fourteen_years').val(newDateStrFourteen);

     let dateTwentyOne = new Date(dateVal);
    
   dateTwentyOne.setFullYear(dateTwentyOne.getFullYear() + 21);
    
  
    let yearTwentyOne = dateTwentyOne.getFullYear();
    let monthTwentyOne = String(d.getMonth() + 1).padStart(2, '0');
    let daywentyOne = String(d.getDate()).padStart(2, '0');
    let newDateStrTwentyOne = `${monthTwentyOne}/${daywentyOne}/${yearTwentyOne}`;
    
    $('.in_twenty_one_years').val(newDateStrTwentyOne);

  
}
});
$('.years_to_target_age').on('keyup', function (e) {

  return false;

});
$('.years_to_target_age').on('keydown', function (e) {
  var dateVal = $('.initial_appointment_date').val();
  if(dateVal == "")
  {
    return false;
  }
});

$('.desired_retirement_age').on('keydown', function (e) {
  return false;
});

$('.in_seven_years').on('keydown', function (e) {
  return false;
});

$('.in_fourteen_years').on('keydown', function (e) {
  return false;
});

$('.in_twenty_one_years').on('keydown', function (e) {
  return false;
});
 $('.desired_retirement_date').on('keydown', function (e) {
  return false;
});

//Income Calculation
 $('.salary_client_annual,.salary_partner_annual,.bonus_client_annual,.bonus_partner_annual,.interest_income_client_annual,.interest_income_partner_annual').on('keydown', function (e) {
  return false;
});
$('.salary_client, .salary_partner,.bonus_client, .bonus_partner,.interest_income_client,.interest_income_partner').on('keypress',function(event){
     if(event.which < 46 || event.which >= 58 || event.which == 47) {
    event.preventDefault();
  }

  if(event.which == 46 && $(this).val().indexOf('.') != -1) {
    this.value = '' ;
  }
});

    
    $('.salary_client, .salary_partner, #salary_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.salary_client', '.salary_partner', '#salary_frequency', '.salary_client_annual', '.salary_partner_annual');
    });

    $('.bonus_client, .bonus_partner, #bonus_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.bonus_client', '.bonus_partner', '#bonus_frequency', '.bonus_client_annual', '.bonus_partner_annual');
    });

    $('.interest_income_client, .interest_income_partner, #interest_income_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.interest_income_client', '.interest_income_partner', '#interest_income_frequency', '.interest_income_client_annual', '.interest_income_partner_annual');
    });

    $('.rental_income_client, .rental_income_partner, #rental_income_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.rental_income_client', '.rental_income_partner', '#rental_income_frequency', '.rental_income_client_annual', '.rental_income_partner_annual');
    });

    $('.dividend_income_client, .dividend_income_partner, #dividend_income_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.dividend_income_client', '.dividend_income_partner', '#dividend_income_frequency', '.dividend_income_client_annual', '.dividend_income_partner_annual');
    });

    $('.ss_income_client, .ss_income_partner, #ss_income_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.ss_income_client', '.ss_income_partner', '#ss_income_frequency', '.ss_income_client_annual', '.ss_income_partner_annual');
    });

    $('.business_income_client, .business_income_partner, #business_income_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.business_income_client', '.business_income_partner', '#business_income_frequency', '.business_income_client_annual', '.business_income_partner_annual');
    });

    $('.other_income_client, .other_income_partner, #other_income_frequency').on('keyup input change', function() {
        calculateAnnualIncome('.other_income_client', '.other_income_partner', '#other_income_frequency', '.other_income_client_annual', '.other_income_partner_annual');
    });


$('.sg_rate').on('keyup',function(){

   supperAnnutationCalcs('.gross_salary','.sg_rate','.annual_contribution','.quarterly_contribution');

});

$('.partner_sg_rate').on('keyup',function(){

  supperAnnutationCalcs('.partner_gross_salary','.partner_sg_rate','.partner_annual_contribution','.partner_quarterly_contribution');
});

$('#principle_residence,.principle_client_percentage,.principle_partner_percentage,.principle_market_value').on('keyup input change',function(){

  calculateNonInvestmentAsset('#principle_residence','.principle_client_percentage','.principle_partner_percentage','.principle_market_value','.principle_client','.principle_partner');
});

$('#cash_everyday,.cash_client_percentage,.cash_partner_percentage,.cash_market_value').on('keyup input change',function(){

  calculateNonInvestmentAsset('#cash_everyday','.cash_client_percentage','.cash_partner_percentage','.cash_market_value','.cash_client','.cash_partner');
});

// $('#non-investment-owner-asset,.non_investment_asset_client_percentage,.non_investment_asset_partner_percentage,.non_investment_asset_market_value').on('keyup input change',function(){

//   calculateNonInvestmentAsset('#non-investment-owner-asset','.non_investment_asset_client_percentage','.non_investment_asset_partner_percentage','.non_investment_asset_market_value','.non_investment_asset_client','.non_investment_asset_partner')
// });

$('.div-non-investment-property,#assets-container').on('keyup input change','.non-investment-owner-asset,.non_investment_asset_client_percentage, .non_investment_asset_partner_percentage, .non_investment_asset_market_value',function(){
     let row = $(this).closest('.form-row');

        // Execute your calculation function safely using scoped elements
        calculateNonInvestmentAsset(
            row.find('.non-investment-owner-asset'),
            row.find('.non_investment_asset_client_percentage'),
            row.find('.non_investment_asset_partner_percentage'),
            row.find('.non_investment_asset_market_value'),
            row.find('.non_investment_asset_client'),
            row.find('.non_investment_asset_partner')
        );
});

$('#long_term_investment_asset,.long_term_client_percentage,.long_term_partner_percentage,.long_term_market_value').on('keyup input change',function(){

  calculateInvestmentAsset('#long_term_investment_asset','.long_term_client_percentage','.long_term_partner_percentage','.long_term_market_value','.long_term_client','.long_term_partner');
});

$('#superannuation_client_net,.superannuation_client_client_percentage,.superannuation_client_partner_percentage,.superannuation_client_market_value').on('keyup input change',function(){

  calculateInvestmentAsset('#superannuation_client_net','.superannuation_client_client_percentage','.superannuation_client_partner_percentage','.superannuation_client_market_value','.superannuation_client_client','.superannuation_client_partner');
});

$('#superannuation_partner_net,.superannuation_partner_client_percentage,.superannuation_partner_parnter_percentage,.superannuation_partner_market_value').on('keyup input change',function(){

  calculateInvestmentAsset('#superannuation_partner_net','.superannuation_partner_client_percentage','.superannuation_partner_parnter_percentage','.superannuation_partner_market_value','.superannuation_partner_client','.superannuation_partner_partner');
});

$('#shares_fund,.shares_fund_client_percentage,.shares_fund_partner_percentage,.shares_fund_market_value').on('keyup input change',function(){

  calculateInvestmentAsset('#shares_fund','.shares_fund_client_percentage','.shares_fund_partner_percentage','.shares_fund_market_value','.shares_fund_client','.shares_fund_partner');
});

$('#business,.business_client_percentage,.business_partner_percentage,.business_market_value').on('keyup input change',function(){

calculateInvestmentAsset('#business','.business_client_percentage','.business_partner_percentage','.business_market_value','.business_client','.business_partner');
});

$('.investment-property,.investment-container').on('keyup input change','#non-investment-owner,.client_percentage, partner_percentage,.market_value',function(){
     let row = $(this).closest('.form-row-investment');

        // Execute your calculation function safely using scoped elements
        calculateInvestmentAsset(
            row.find('.investment_property'),
            row.find('.client_percentage'),
            row.find('.partner_percentage'),
            row.find('.market_value'),
            row.find('.client'),
            row.find('.partner')
        );
});

});