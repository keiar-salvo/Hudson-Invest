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
       

    <div class="table-responsive" style="min-height:600px;">
                <table class="table table-hover" id="search-table" >
                    <thead>

                        <tr>

                            <th class="text-left">ID</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Email</th>
                            <th class="text-left">Phone Mobile</th>
                            <th class="text-left">Date Added</th>
                             <th class="text-left">Action</th>
                       
                        
                  
                        
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
                  "targets": [0], 
                  "visible": false, 
                  "searchable": true 
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
        var convertedDate = formatDate.toLocaleDateString('en-GB'); 
        var uniqueId = "dropdown-trigger-" + element.details_id;

        table.row.add([
            element.details_id,
            element.name,
            element.email,
            element.phone_mobile,
            convertedDate,
            '<div class="dropdown-container">'+ 
         
            '<input type="checkbox" id="' + uniqueId + '" class="dropdown-toggle-input">'+ 
            '<label for="' + uniqueId + '" class="dropdown-button">View</label>'+ 
            '<ul class="dropdown-menu">'+ 
            '<li><a href="/details?id='+ element.details_id + '" target="_blank">Personal Details</a></li>'+ 
            '<li><a href="/currentposition?id='+ element.details_id + '" target="_blank">Current Position</a></li>'+ 
            '<li><a href="/details?id='+ element.details_id +'">Financial Independence</a></li>'+ 
            '<li><a href="/details?id='+ element.details_id +'">Initital Client Graph</a></li>'+ 
            '<li><a href="/details?id='+ element.details_id +'">Client New IP Graph</a></li>'+ 
            '<li><a href="/details?id='+ element.details_id +'">Client Po with IP Graph</a></li>'+ 
            '</ul></div>' 
        ]).draw(false); 
    });        
          },
        error: function(error) {
            console.error("AJAX Error: " + error);
            }
          });


$(document).on('click', function(event) {
    var $clickedElement = $(event.target);
    if (!$clickedElement.closest('.dropdown-container').length) {
        $('.dropdown-toggle-input').prop('checked', false);
        return;
    }

    if ($clickedElement.hasClass('dropdown-button')) {
        var currentCheckboxId = $clickedElement.attr('for');
        $('.dropdown-toggle-input').not('#' + currentCheckboxId).prop('checked', false);
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
// $(document).on('click','#search-table td',function(){
//   var table = $("#search-table").DataTable();
// var data = table.row($(this)).data();
//  window.open('/details?id=' + data[0], 'blank');
// });
// $(document).on('click','#search-table tbody tr',function(){
//     $('#search-table tbody tr').removeClass('client-selected');

//             $(this).addClass('client-selected');
// });
    </script>
  <style>
   div.dataTables_wrapper div.dataTables_filter {
    text-align: center;

}
/* 1. Main Container */
.dropdown-container {
  position: relative;
  display: inline-block;
  font-family: system-ui, -apple-system, sans-serif;
}

/* 2. Hide the actual checkbox completely */
.dropdown-toggle-input {
  display: none;
}

/* 3. The Button (Styled as a Label) */
.dropdown-button {
  background-color: #17a2b8;
  color: white;
  padding: 6px 15px;
  font-size: 13px;
  font-weight: 500;
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
  user-select: none; /* Prevents text highlighting on double click */
  transition: background 0.2s;
}

.dropdown-button:hover {
  background-color: #17a2b8;
}

/* 4. Pure CSS Down Arrow Caret */
.dropdown-button::after {
  content: "";
  display: inline-block;
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid white;
  transition: transform 0.2s ease;
}

/* 5. Dropdown Menu List (Hidden by default) */
.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: white;
  min-width: 180px;
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
  border: 1px solid #dee2e6;
  border-radius: 6px;
  margin-top: 5px;
  padding: 6px 0;
  list-style: none;
  z-index: 100;
}

.dropdown-menu a {
  color: black;
  padding: 10px 16px; 
  text-decoration: none;
  display: block;
  font-size: 14px;
font-weight: normal;
}

/* Force normal weight and lock original padding on hover */
.dropdown-menu a:hover {
  background-color: #f8f9fa;
  font-weight: normal;
  padding: 10px 16px;
}

/* -------------------------------------------------------------
   THE CLICK MAGIC: When the checkbox is checked, modify elements 
   ------------------------------------------------------------- */

/* Show the menu when clicked */
.dropdown-toggle-input:checked ~ .dropdown-menu {
  display: block;
}

/* Rotate the arrow upside down when clicked */
.dropdown-toggle-input:checked ~ .dropdown-button::after {
  transform: rotate(180deg);
}



  </style>
      @endsection
@endsection