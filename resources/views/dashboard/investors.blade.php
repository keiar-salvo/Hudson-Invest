@extends('layouts.master')

@section('content')

    
    <style>
        .font-analytics { font-family: 'Inter', sans-serif; }
    </style>

          <div class="bg-white rounded-lg shadow">
            <div class="container">

           
    <div class="animate__animated p-6 font-analytics bg-[#F8F9FA] min-h-screen text-[#1E293B]" :class="[$store.app.animation]">
   
        <!-- Breadcrumb Tracker Header Context -->
        <div x-data="personaldetails" class="mb-6">
            <ul class="flex space-x-2 rtl:space-x-reverse text-xs tracking-wider text-slate-400 font-medium uppercase">
                <li><a href="javascript:;" class="hover:text-slate-600 transition">Dashboard</a></li>
                <li>/</li>
                <li class="text-slate-600">Overview</li>
            </ul>
        </div>
 
        <!-- TOP ROW METRICS GRID (Colorized Containers with crisp white text) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-5 mb-8">
            
            <!-- Card 1: Total Absolute Count (Deep Indigo Accent) -->
            <div class="bg-indigo-600 p-5 rounded-xl border border-indigo-700 shadow-md text-white" style="background-color:#38BDF8">
                <span class="text-xs font-semibold text-indigo-200 tracking-wide block mb-2">Total Investors</span>
                <div class="text-3xl font-bold tracking-tight text-white">{{ number_format($totalInvestors) }}</div>
            </div>

            <!-- Card 2: 30-Day Velocity (Vibrant Emerald Accent) -->
            <div class="bg-emerald-600 p-5 rounded-xl border border-emerald-700 shadow-md text-white" style="background-color:#38BDF8">
                <span class="text-xs font-semibold text-emerald-200 tracking-wide block mb-2">Recent Onboarding (30d)</span>
                <div class="text-3xl font-bold tracking-tight text-white">+{{ number_format($recentInvestors) }}</div>
            </div>

            <!-- Card 3: System Assumption Rate (Royal Blue Accent) -->
            <div class="bg-blue-600 p-5 rounded-xl border border-blue-700 shadow-md text-white" style="background-color:#bd0c1d;">
                <span class="text-xs font-semibold text-blue-200 tracking-wide block mb-2">Annual Compound Growth Rate</span>
                <div class="text-3xl font-bold tracking-tight text-white">{{ $assumptionData->annual_compound_growth_rate_investment_assets }}%</div>
            </div>

            <!-- Card 4: Inflation Target Performance (Modern Slate Accent) -->
            <div class="bg-slate-700 p-5 rounded-xl border border-slate-800 shadow-md text-white" style="background-color:#bd0c1d;">
                <span class="text-xs font-semibold text-slate-300 tracking-wide block mb-2">Annual Inflation Rate</span>
                <div class="text-3xl font-bold tracking-tight text-white">{{ $assumptionData->annual_inflation_rate }}%</div>
            </div>

            <!-- Card 5: Mortgage Interests (Rich Purple Accent) -->
            <div class="bg-purple-600 p-5 rounded-xl border border-purple-700 shadow-md text-white" style="background-color:#bd0c1d;">
                <span class="text-xs font-semibold text-purple-200 tracking-wide block mb-2">Annual Interest Mortgages</span>
                <div class="text-3xl font-bold tracking-tight text-white">{{ $assumptionData->annual_interest_rate_mortgages }}%</div>
            </div>

            <!-- Card 6: Superannuation Contributions (Warm Amber Accent) -->
            <div class="bg-amber-600 p-5 rounded-xl border border-amber-700 shadow-md text-white" style="background-color:#bd0c1d;">
                <span class="text-xs font-semibold text-amber-200 tracking-wide block mb-2">Annual Contribution Superannuation</span>
                <div class="text-3xl font-bold tracking-tight text-white">{{ $assumptionData->annual_contribution_superannuation }}%</div>
            </div>

        </div>
   <!-- VISUALIZATION TRACK: DUAL GRAPH HORIZONTAL ROW GRID -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
            
            <!-- LEFT COLUMN: 12-Month Line Progression Curve (70% Horizon Width Span) -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-[0_2px_12px_rgba(0,0,0,0.02)] lg:col-span-8 flex flex-col justify-between">
                <div class="mb-4">
                    <h3 class="text-sm font-semibold text-slate-800">Annual Registration Curve</h3>
                    <p class="text-xs text-slate-400 font-light">Registration volume from January to December</p>
                </div>
                <div class="relative w-full h-72">
                    <canvas id="annualLineChart"></canvas>
                </div>
            </div>

            <!-- RIGHT COLUMN: Investor Share Breakdown Pie (30% Horizon Width Span) -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-[0_2px_12px_rgba(0,0,0,0.02)] lg:col-span-4 flex flex-col justify-between">
                <div class="mb-4">
                    <h3 class="text-sm font-semibold text-slate-800">Investor Demographic Segments</h3>
                    <p class="text-xs text-slate-400 font-light">Percentage Onboarded Investors</p>
                </div>
                <div class="relative w-full h-72 flex items-center justify-center">
                    <div class="w-64 h-64">
                        <canvas id="distributionPieChart"></canvas>
                    </div>
                </div>
            </div>

        </div>

    </div>

       </div>

          </div> 



    <!-- Deferred System Canvas Architecture Core Dependencies -->
    <script defer src="{{ asset('assets/js/chart-umd.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/chart-umd-datalabels.min.js') }}"></script>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. DATA EXTRACTION LAYER
            const backendRecords = @json($monthlyTrends);
            
            // Fixed calendar mapping array to lock down strict chronology from Jan to Dec
            const calendarMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            
            // Map your dynamic backend values cleanly onto corresponding month indices
            const mappedAnnualMetrics = calendarMonths.map(monthName => {
                const matchedRecord = backendRecords.find(item => {
                    return item.month && item.month.toLowerCase().includes(monthName.substring(0, 3).toLowerCase());
                });
                return matchedRecord ? matchedRecord.aggregate_count : 0;
            });

            // 2. EXECUTING CHART A: FIXED 12-MONTH ANNUITY LINE PATTERNS
            const lineContext = document.getElementById('annualLineChart').getContext('2d');
            
            const softSkyFill = lineContext.createLinearGradient(0, 0, 0, 260);
            softSkyFill.addColorStop(0, 'rgba(56, 189, 248, 0.20)'); 
            softSkyFill.addColorStop(1, 'rgba(56, 189, 248, 0.00)');

            new Chart(lineContext, {
                type: 'line',
                data: {
                    labels: calendarMonths, // Hardcoded January up to December mapping
                    datasets: [{
                        label: 'Registered Profiles',
                        data: mappedAnnualMetrics,
                        borderColor: '#38BDF8', // Sky Blue border trace matching Card 1
                        backgroundColor: softSkyFill,
                        borderWidth: 2.5,
                        fill: true,
                        tension: 0.35,
                        pointBackgroundColor: '#FFFFFF',
                        pointBorderColor: '#38BDF8',
                        pointRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { beginAtZero: true, grid: { color: '#F1F5F9' }, ticks: { color: '#94A3B8', stepSize: 1 } },
                        x: { grid: { display: false }, ticks: { color: '#94A3B8' } }
                    }
                }
            });

            // 3. EXECUTING CHART B: HIGH-CONTRAST PORTFOLIO SEGMENT PIE GRAPH
            const pieContext = document.getElementById('distributionPieChart').getContext('2d');
            
            // Dynamically parsing placeholder percentages for the pie segment wedges 
            const primaryTotal = Math.max({{ $totalInvestors }}, 1);
            const secondaryRecent = {{ $recentInvestors }};
            const calculationRemainder = Math.max(primaryTotal - secondaryRecent, 0);

            new Chart(pieContext, {
                type: 'pie',
                data: {
                    labels: ['New Onboarded (30d)', 'Retained Core Base'],
                    datasets: [{
                        data: [secondaryRecent, calculationRemainder],
                        backgroundColor: [
                            '#38BDF8', // Brand matching Sky Blue
                            '#0284C7'  // Deep ocean contrast sapphire
                        ],
                        borderWidth: 2,
                        borderColor: '#FFFFFF'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: { boxWidth: 12, padding: 15, font: { size: 11, family: 'Inter' }, color: '#64748B' }
                        }
                    }
                }
            });
        });
    </script>
@endsection
