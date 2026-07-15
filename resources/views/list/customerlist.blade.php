@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline">Data / Client List</a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
         <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
                <div class="container">
       

    <div class="table-responsive">
                <table class="table table-hover" id="search-table">
                    <thead>

                        <tr>

                            <th class="text-left">ID</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Email</th>
                            <th class="text-left">Phone Mobile</th>
                            <th class="text-left">Date Added</th>
                       
                        
                  
                        
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>
                </table>
            </div>
    </div>


            </div> <!-- /container -->
         </div>


    </div>
    @section('scripts')
    <script>
        $(document).ready(function(){
              var appURL = window.location.origin;
                var table = $("#search-table").DataTable({
              
                "destroy":true,
                "searching": true,
                "dom": 'frtip',
                "order":['asc'],
        
                 language: {
        searchPlaceholder: "Search Name",
        search: "",
},
"columnDefs": [
        {
            "targets": [0], // Targets the second column
            "visible": false, // Hides the column
            "searchable": true // Optional: allows the hidden column data to still be searchable
        }
    ]
  
    });
        


 $.ajax({
                    url: appURL + "/clientlist" ,
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                      
                      console.log(response);
                 $.each(response, function(index, element) {
                    var formatDate = new Date(element.date_encoded);
                    var convertedDate =  formatDate.toLocaleDateString('en-GB');

                     table.row.add([element.details_id,element.name,element.email,element.phone_mobile,convertedDate ]).draw(false);

                
                });
                      
                      
                    
                      
                    },
                    error: function(error) {
                        console.error("AJAX Error: " + error);
                    }
                });

   $('#dt-search-0').keyup(function(){
        if($(this).val() == "")
        {
                $('#search-table tbody tr').removeClass('client-selected');
        }
   });
        });
//     $(document).on('click', '.view_details', function() {
//         var id = $(this).val();

//     //   window.location.href = '/details?id=' + id;
     

  
// });
$(document).on('click','#search-table td',function(){
  var table = $("#search-table").DataTable();
var data = table.row($(this)).data();
 window.open('/details?id=' + data[0], 'blank');
});
$(document).on('click','#search-table tbody tr',function(){
    $('#search-table tbody tr').removeClass('client-selected');

            $(this).addClass('client-selected');
});
    </script>
  <style>
   div.dataTables_wrapper div.dataTables_filter {
    text-align: center;

}
  </style>
      @endsection
@endsection