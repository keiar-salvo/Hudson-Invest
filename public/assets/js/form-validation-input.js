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


});