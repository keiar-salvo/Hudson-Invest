@extends('layouts.master')
@section('content')
    <div class="animate__animated p-6" :class="[$store.app.animation]">
   
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline">Chart / Financial Indepence Target</a>
                </li>
        
            </ul>

        </div>
 
         <br/>
         <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
                <div class="container">
       

<div class="chart-header">
    <h1>Financial Indepence Target</h1>
    <h3>Before Implementing Stategic Property Investment Plan</h3>
    <br/>
    <div class="chart-metadata">
      <p class="target_value"></p>
        <p class="inflation_rate"></p>
        <p class="target_retirement"></p>
        <p class="present_value"></p>
    </div>
</div>
  <div>
      <canvas id="financialChart" ></canvas>
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
  const cleanNum = (str) => parseFloat(str.toString().replace(/,/g, ''));
  
    $.ajax({
        url: appURL + "/initialclientpograph/" + product,
        method: 'GET',
        dataType: 'json'
    })
     .done(function(jsonResponse) {
        $('.target_value').html('Current Net Financial Assets: <strong>' + jsonResponse.current_net_financial_assets + '</strong>');
        $('.target_retirement').html('Investment Portfolio Required in Todays $: <strong>' + jsonResponse.total_investment_portfolio_required + '</strong>');
        $('.present_value').html('Investment Portfolio Required Allowing For 3% Inflation <strong>' + jsonResponse.total_annual_household_income_retirement + '</strong>');

    
        const currentAssets = cleanNum(jsonResponse.current_net_financial_assets);
        const portfolioRequired = cleanNum(jsonResponse.total_investment_portfolio_required);
        const inflationPortfolio = cleanNum(jsonResponse.total_annual_household_income_retirement);

        const ctx = $('#financialChart')[0].getContext('2d');
        
     
        new Chart(ctx, {
            type: 'line',
            plugins: [ChartDataLabels], 
            data: {
                labels: ['Today', 'At Retirement'],
                datasets: [
                    {
                        label: 'Current Net Financial Assets',
                        data: [300000, currentAssets], 
                        borderColor: '#a6a6a6', 
                        backgroundColor: '#a6a6a6',
                        borderWidth: 1.5,
                        pointRadius: 0, 
                        tension: 0
                    },
                    {
                        label: "Investment Portfolio Required in Today's $",
                        data: [300000, portfolioRequired], 
                        borderColor: '#e28755', 
                        backgroundColor: '#e28755',
                        borderWidth: 1.5,
                        pointRadius: 0,
                        tension: 0
                    },
                    {
                        label: 'Investment Portfolio Required Allowing For 3% Inflation',
                        data: [300000, inflationPortfolio], 
                        borderColor: '#c00000', 
                        backgroundColor: '#c00000',
                        borderWidth: 1.5,
                        pointRadius: 0,
                        tension: 0
                    }
                ]
            },
            options: {
                responsive: true,
                layout: {
                    padding: { right: 85, left: 15, top: 20 }
                },
                plugins: {
                   
                    legend: { 
                        display: true,
                        position: 'bottom',
                        align: 'start',
                        labels: {
                            boxWidth: 35,
                            boxHeight: 1, 
                            padding: 15,
                            font: { family: 'Arial', size: 11 }
                        }
                    },
               
                    datalabels: {
                        display: true,
                        align: function(context) {
                            return context.dataIndex === 0 ? 'bottom' : 'right';
                        },
                        anchor: 'center',
                        offset: 6,
                        color: function(context) {
                            return context.dataIndex === 0 ? '#666666' : context.dataset.borderColor;
                        },
                        font: { family: 'Arial', size: 10 },
                        formatter: function(value, context) {
                      
                            if (context.dataIndex === 0) {
                                return context.datasetIndex === 0 ? '300,000' : null;
                            }
                            return value.toLocaleString(undefined, { maximumFractionDigits: 0 });
                        }
                    }
                },
                scales: {
                    y: {
                        min: 0, 
                        max: 8000000, 
                        ticks: {
                            stepSize: 1000000,
                            font: { family: 'Arial', size: 11 },
                            callback: function(value) {
                                return value === 0 ? '0' : value.toLocaleString();
                            }
                        },
                        grid: { color: '#e5e5e5', drawTicks: false }
                    },
                    x: {
                        grid: { color: '#e5e5e5', drawOnChartArea: true },
                        ticks: { font: { family: 'Arial', size: 11 } }
                    }
                }
            }
        });
    })
    .fail(function(xhr, status, error) {
     console.error("AJAX Error: " + error);
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
.chart-header h3 {
    font-size: 20px;
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