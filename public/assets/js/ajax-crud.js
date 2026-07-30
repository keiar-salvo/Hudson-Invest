
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
    FillInvestmentAsset(response);
    $('.add-investment-property').css('display','none');                 
    $('.btn-details').css('display','none');
    $('.btn-update-details').css('display','block');
    var  investment_asset = (response['InvestmentPropertyAssetDetails']).length;
    var  other_personal_assets = (response['OtherPersonalAssets']).length;
    for(var x = 1; x < investment_asset; x++)
    {
       addHTML(x);
    }
    for(var x = 1; x < other_personal_assets; x++)
    {
       Add_Non_Investment_HTML(x);
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

      }
    },
    error: function(error) {
    console.error("AJAX Error: " + error);
    }
    });
        /************End Get Details******************************/
});/***end document***/
         



   

 
 