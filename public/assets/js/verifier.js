  $(document).ready(function(){
       var appURL = window.location.origin;
     var user_id =  $('.user_id').val();

        $.ajax({
                    url: appURL + "/details/" + user_id,
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                      
                      console.log(response);
                      if(response.status == 'no data available')
                      {
                         $('.verifiedToOpen').addClass('div-disabled');
                      }
                      else{
                         $('.verifiedToOpen').removeClass('div-disabled');
                      }
                      
                    },
                    error: function(error) {
                        console.error("AJAX Error: " + error);
                    }
                });
  });
  
  