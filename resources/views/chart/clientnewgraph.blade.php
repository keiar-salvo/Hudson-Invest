@extends('layouts.master')
@section('content')
     <div class="animate__animated p-6 flex flex-col" :class="[$store.app.animation]" style="min-height: calc(100vh - 60px);">
   
        <div x-data="personaldetails">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline">Chart / Financial Independence Target</a>
                </li>
            </ul>
        </div>
 
        <br/>
         
  
        <div class="w-full flex-grow flex flex-col p-6 bg-white rounded-lg shadow-md">
            
            <div class="chart-header text-center mb-4 flex-shrink-0">
                <h1 class="text-2xl font-bold text-gray-800">Financial Independence Targets</h1>
                <p class="text-sm text-gray-500">After Implementing Initial Strategic Property Investment Plan</p>
            </div>

            <div class="chart-container relative w-full flex-grow" style="min-height: 60vh;">
                <canvas id="fiTargetsChart" style="display:none;"></canvas>
            </div>

        </div>

    </div>
     <script defer="" src="{{ asset('assets/js/chart-umd.min.js') }}"></script>
         <script defer="" src="{{ asset('assets/js/chart-umd-datalabels.min.js') }}"></script>

    @section('scripts')
    <script>
$(document).ready(function() {
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const product = urlParams.get('id');
var appURL = window.location.origin;
         
      $.ajax({
    url: '/clientnewgraph/' + product,
    type: 'GET',
    dataType: 'json',
    success: function(response) {
        $('#fiTargetsChart').show();
        renderChart(response);
    },
    error: function(xhr, status, error) {
        $('#loader').text('Error loading data: ' + error).css('color', 'red');
    }
});

function renderChart(data) {
   
    Chart.register(ChartDataLabels);

    function parseValue(val) {
        if (typeof val === 'string') {
            return parseFloat(val.replace(/,/g, ''));
        }
        return parseFloat(val) || 0;
    }

    const labels = [data["timeframe"]["start"], data["timeframe"]["end"]];
    const startVal = parseValue(data["inital_assets"]); 

    const ctx = document.getElementById('fiTargetsChart').getContext('2d');
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Current Net Financial Assets',
                    data: [startVal, parseValue(data["endpoints"]["currentposition"]["investment_portfolio_net_financial_assets"])],
                    borderColor: '#999999', 
                    backgroundColor: '#999999',
                    borderWidth: 2,
                    pointRadius: 0,
                    hoverRadius: 5
                },
                {
                    label: 'Investing in Property Today',
                    data: [startVal, parseValue(data["endpoints"]["addingnewip"]["total_investment_retirement_value"])],
                    borderColor: '#a9c59e', 
                    backgroundColor: '#a9c59e',
                    borderWidth: 2,
                    pointRadius: 0,
                    hoverRadius: 5
                },
                {
                    label: "Investment Portfolio Required in Today's $",
                    data: [startVal, parseValue(data["endpoints"]["finIndependance"]["total_investment_portfolio_required"])],
                    borderColor: '#f2c318', 
                    backgroundColor: '#f2c318',
                    borderWidth: 2.5,
                    pointRadius: 0,
                    hoverRadius: 5
                },
                {
                    label: 'Investment Portfolio Required Allowing For 3% Inflation',
                    data: [startVal, parseValue(data["endpoints"]["finIndependance"]["total_annual_household_income_retirement"])],
                    borderColor: '#df1f1f', 
                    backgroundColor: '#df1f1f',
                    borderWidth: 3,
                    pointRadius: 0,
                    hoverRadius: 5
                }
            ]
        },
         options: {
    responsive: true,
    maintainAspectRatio: false, 
    layout: {
        padding: {
            left: 70,   
            right: 90, 
            top: 15,
            bottom: 15
        }
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
}
        });
    </script>
<style>
    .chart-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .chart-header h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0 0 5px 0;
            color: #111;
        }
        .chart-header p {
            font-size: 16px;
            margin: 0;
            color: #333;
        }
        .chart-container {
            position: relative;
            width: 100%;
            height: 550px;
        }
</style>
      @endsection
@endsection