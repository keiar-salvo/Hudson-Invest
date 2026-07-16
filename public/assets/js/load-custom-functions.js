
   




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

     var appURL = window.location.origin;
     var details_id =  $('.details_id').val();


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
                 
            setTimeout(function () {
               
            }, 10000);

      
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
$('.target_age').on('keydown', function (e) {
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
    var age_partner = $('.age_partner').val();
    var years_to_target_age = parseInt(age_partner) - parseInt(target_age);
    $('.years_to_target_age').val(Math.round(years_to_target_age) );
    var dateVal = $('.initial_appointment_date').val();
  if(dateVal != "")
  {
    if($('.years_to_target_age').val() != "")
    {
  let desired_retirment_age = new Date(dateVal);
    
  
   desired_retirment_age.setFullYear(desired_retirment_age.getFullYear() + parseInt($(this).val()) );
    
   
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
                        $('.add-investment-property').css('display','none');
                     
                        $('.btn-details').css('display','none');
                       $('.btn-update-details').css('display','block');
                       var  investment_asset = (response['InvestmentAssetDetails']).length;
                       for(var x = 1; x < investment_asset; x++)
                       {
                          addHTML(x);
                       }
                       var get;
                    
                          response['InvestmentAssetDetails'].forEach((element,index) => {
                            $('.investment_property').eq(index).val(element.investment_property);
                            $('.client_percentage').eq(index).val(element.client_percentage);
                            $('.partner_percentage').eq(index).val(element.partner_percentage);
                            $('.market_value').eq(index).val(element.market_value);
                            $('.client').eq(index).val(element.client);
                            $('.partner').eq(index).val(element.partner);
                            $('.investment_id').eq(index).val(element.id)
                            
                       });
                     
                      }
                      
                    },
                    error: function(error) {
                        console.error("AJAX Error: " + error);
                    }
                });

              
         });
         



   

 
 