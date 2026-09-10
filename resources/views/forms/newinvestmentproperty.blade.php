@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline"><b>Forms / New Investment Property </b></a>
                </li>
        
            </ul>

        </div>
        <!-- end main content section -->
         <br/>
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
  
   <form class="portfolio-form">
<!-- SYSTEM PORTFOLIO WRAPPER: Matches the exact 100% full-width footprint of the upper box -->
<div class="w-full mb-8 text-xs">

  <!-- 
    UNIFIED FULL-WIDTH FIELDSET: 
    Styled exactly like your "Investment Debt Rates" block container
  -->
  <fieldset class="group-box bg-white border border-gray-200 rounded-lg p-5 shadow-sm w-full overflow-hidden">
    <legend class="group-title px-3 py-1 bg-gray-800 text-white text-xs font-semibold rounded-full shadow-sm">
      Property Acquisition Pipeline Map (IP 1 to IP 7)
    </legend>
    
    <!-- 
      THE CONVEYOR SCROLL TRACK:
      Allows all 7 property blocks to sit side-by-side cleanly. Users can scroll
      horizontally to navigate through the entire real estate portfolio timeline.
    -->
    <div class="flex flex-row overflow-x-auto gap-6 pb-4 w-full items-start scroll-smooth custom-scroll-track">

      <!-- ==================== PROPERTY 1 (CURRENT) ==================== -->
      <!-- Styled as the anchor card, left-aligned to mirror your upper input cards -->
      <div class="w-[200px] shrink-0 bg-blue-50/40 border border-blue-200 rounded-lg p-4 shadow-sm text-left flex flex-col items-start">
        <div class="text-xs font-bold text-blue-800 border-b border-blue-200 pb-2 mb-3 w-full flex justify-between">
          <span>Current IP 1</span>
          <span class="text-[10px] text-blue-500 uppercase tracking-wider font-semibold">Active</span>
        </div>
        
        <div class="mb-4 w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Date</label>
          <input type="month" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip1_purchase_date" value="2019-07">
        </div>
        
        <div class="w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Price</label>
          <input type="text" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip1_purchase_price" value="$650,000">
        </div>
      </div>

      <!-- ==================== PROPERTY 2 ==================== -->
      <div class="w-[200px] shrink-0 bg-gray-50/70 border border-gray-200 rounded-lg p-4 shadow-sm text-left flex flex-col items-start">
        <div class="text-xs font-bold text-gray-800 border-b border-gray-200 pb-2 mb-3 w-full">New IP 2</div>
        
        <div class="mb-4 w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Date</label>
          <input type="month" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip2_purchase_date" value="2021-06">
        </div>
        
        <div class="w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Price</label>
          <input type="text" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip2_purchase_price" value="$750,000">
        </div>
      </div>

      <!-- ==================== PROPERTY 3 ==================== -->
      <div class="w-[200px] shrink-0 bg-gray-50/70 border border-gray-200 rounded-lg p-4 shadow-sm text-left flex flex-col items-start">
        <div class="text-xs font-bold text-gray-800 border-b border-gray-200 pb-2 mb-3 w-full">New IP 3</div>
        
        <div class="mb-4 w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Date</label>
          <input type="month" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip3_purchase_date" value="2023-06">
        </div>
        
        <div class="w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Price</label>
          <input type="text" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip3_purchase_price" value="$850,000">
        </div>
      </div>

      <!-- ==================== PROPERTY 4 ==================== -->
      <div class="w-[200px] shrink-0 bg-gray-50/70 border border-gray-200 rounded-lg p-4 shadow-sm text-left flex flex-col items-start">
        <div class="text-xs font-bold text-gray-800 border-b border-gray-200 pb-2 mb-3 w-full">New IP 4</div>
        
        <div class="mb-4 w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Date</label>
          <input type="month" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip4_purchase_date" value="2025-06">
        </div>
        
        <div class="w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Price</label>
          <input type="text" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip4_purchase_price" value="$950,000">
        </div>
      </div>

      <!-- ==================== PROPERTY 5 ==================== -->
      <div class="w-[200px] shrink-0 bg-gray-50/70 border border-gray-200 rounded-lg p-4 shadow-sm text-left flex flex-col items-start">
        <div class="text-xs font-bold text-gray-800 border-b border-gray-200 pb-2 mb-3 w-full">New IP 5</div>
        
        <div class="mb-4 w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Date</label>
          <input type="month" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip5_purchase_date" value="2027-06">
        </div>
        
        <div class="w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Price</label>
          <input type="text" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip5_purchase_price" value="$1,050,000">
        </div>
      </div>

      <!-- ==================== PROPERTY 6 ==================== -->
      <div class="w-[200px] shrink-0 bg-gray-50/70 border border-gray-200 rounded-lg p-4 shadow-sm text-left flex flex-col items-start">
        <div class="text-xs font-bold text-gray-800 border-b border-gray-200 pb-2 mb-3 w-full">New IP 6</div>
        
        <div class="mb-4 w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Date</label>
          <input type="month" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip6_purchase_date" value="2029-06">
        </div>
        
        <div class="w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Price</label>
          <input type="text" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip6_purchase_price" value="$1,150,000">
        </div>
      </div>

      <!-- ==================== PROPERTY 7 ==================== -->
      <div class="w-[200px] shrink-0 bg-gray-50/70 border border-gray-200 rounded-lg p-4 shadow-sm text-left flex flex-col items-start">
        <div class="text-xs font-bold text-gray-800 border-b border-gray-200 pb-2 mb-3 w-full">New IP 7</div>
        
        <div class="mb-4 w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Date</label>
          <input type="month" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-left text-xs" name="ip7_purchase_date" value="2031-06">
        </div>
        
        <div class="w-full">
          <label class="block text-[11px] text-gray-500 font-semibold mb-1">Purchase Price</label>
          <input type="text" class="form-input w-[170px] bg-amber-50 border-amber-300 font-semibold text-amber-950 rounded p-2 text-left text-xs" name="ip7_purchase_price" value="$1,250,000">
        </div>
      </div>

    </div>
  </fieldset>

</div>








</form>

<br/>
     <button type="submit" class="btn btn-danger btn-close" style="position:relative; bottom:20px;right:20px;float:right;">
                                    Close
                                </button>



    </div>
        <script defer="" src="{{ asset('assets/js/ajax-crud.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/form-validation-calculation-input.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/get-data-fill-forms.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/append-html.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/unary-calculations.js') }}"></script>
         
      @section('scripts')
      <script>
       $(document).ready(function(){
         $(".btn-close").click(function(){
            window.close();
         })
         });
      </script>
       <style>


    </style>
      @endsection
@endsection