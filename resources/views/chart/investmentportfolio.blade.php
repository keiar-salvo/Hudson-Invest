@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
   
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline">Chart / Investment Portfolio Required Each Year</a>
                </li>
        
            </ul>

        </div>
 
         <br/>
         <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
                <div class="container">
       

<div class="chart-header">
    <h1>Investment Portfolio Required Each Year</h1>
    
    <div class="chart-metadata">
        <p class="target_value">Target Value: 6,976,105</p>
        <p class="inflation_rate">Inflation Rate: 3.0%</p>
        <p class="target_retirement">Years to Target Retirement: 21</p>
        <p class="present_value">Present Value: undefined</p>
    </div>
</div>
  <div>
    <canvas id="financialChart"></canvas>
</div>



            </div> 
         </div>


    </div>
     <script defer="" src="{{ asset('assets/js/chart-umd.min.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/chart-umd-datalabels.min.js') }}"></script>
    @section('scripts')
    <script>
$(document).ready(function($) {
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const product = urlParams.get('id');
var appURL = window.location.origin;

    let currentRecordId = null; 
    let financialChartInstance = null; 
    window.Chart.register(ChartDataLabels);

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

  $.ajax({
  url: appURL + "/investmentportfolio/" + product,
  type: "GET",
  dataType: "json",
  success: function(response) {   
  console.log(response);
 
           let rawArray = response['investmentportfolio'].yearly_value; 
    currentRecordId = response['investmentportfolio'].details_id; 

    let labels = [];
    let dataValues = [];

   
    rawArray.forEach(function(item) {
        labels.push(item.year); 

     
        let cleanNumericValue = parseInt(item.value.replace(/[\$,]/g, ''), 10);
        dataValues.push(cleanNumericValue);
    });

  
    let targetAmount = rawArray[rawArray.length - 1].value; 
    $('.target_value').html('Target Value: <strong>' + response['financialIndependance'].total_annual_household_income_retirement + '</strong>');
    $('.inflation_rate').html('Inflation Rate: <strong>' + parseFloat(response["assumptionData"][0]["annual_inflation_rate"]).toFixed(1) + '%</strong>');
    $('.target_retirement').html('Years to Target Retirement: <strong>' + response["financialIndependance"].years_to_achieve_financial_independence + '</strong>');
    $('.present_value').html('Present Value: <strong>' + response["financialIndependance"].present_value_required + '</strong>');

  
    if (financialChartInstance !== null) {
        financialChartInstance.destroy();
    }

    $('#chart_wrapper').show();

    const ctx = $('#financialChart')[0].getContext('2d');
    let maxChartValue = Math.max(...dataValues);

   
    financialChartInstance = new window.Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels, 
            datasets: [{
                label: 'Required Value ($)',
                data: dataValues, 
                backgroundColor: 'rgba(54, 162, 235, 0.75)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                barPercentage: 0.7
            }]
        },
        options: {
            indexAxis: 'y', 
            responsive: true,
            layout: { padding: { right: 90 } },
            scales: {
                x: {
                    beginAtZero: true,
                    max: Math.ceil(maxChartValue * 1.15), 
                    ticks: {
                        callback: function(value) { return value.toLocaleString(); }
                    },
                    grid: { color: '#eaeaea' }
                },
                y: {
                    reverse: true, 
                    grid: { display: false }
                }
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) { return 'Value: ' + context.raw.toLocaleString(); }
                    }
                },
                datalabels: {
                    anchor: 'end',
                    align: 'right',
                    color: '#444',
                    font: { weight: 'bold', size: 11 },
                    formatter: function(value) { return value.toLocaleString(); }
                }
            }
        }
    });
    },
    error: function(error) {
    console.error("AJAX Error: " + error);
    }
    });
     

        
   
});
      
</script>
<style>
   .chart-header {
    text-align: center;
    width: 100%;
    margin-bottom: 25px;
    font-family: sans-serif;
}

/* Make the main title big and prominent */
.chart-header h1 {
    font-size: 28px;
    font-weight: 700;
    margin: 0 0 15px 0;
    color: #111111;
}

/* Arrange the metadata labels into a clean, centered layout */
.chart-metadata {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin: 0;
    padding: 0;
}

.chart-metadata p {
    font-size: 14px;
    color: #555555;
    margin: 0;
}
</style>
      @endsection
@endsection