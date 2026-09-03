<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('financial_independance', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('gross_household_income_per_annum')->nullable();
            $table->string('desired_current_income_required_retirement')->nullable();
            $table->string('annual_gross_houshold_income_required_in_retirement')->nullable();
            $table->string('weekly_gross_household_income')->nullable();
            $table->string('age_this_year')->nullable();
            $table->string('prefer_retirement_age')->nullable();
            $table->string('years_to_achieve_financial_independence')->nullable();
            $table->string('net_financial_assets')->nullable();
            $table->string('total_investment_portfolio_required')->nullable();
            $table->string('total_annual_household_income_retirement')->nullable();
            $table->string('equivalent_value_of_annual_household')->nullable();
            $table->string('your_current_net_financial_assets_value')->nullable();
            $table->string('annual_increase_in_net_financial_assets')->nullable();
            $table->string('monthly_increase_in_net_financial_assets')->nullable();
            $table->string('weekly_increase_in_net_financial_assets')->nullable();
            $table->string('current_level_of_income_and_expenses')->nullable();
            $table->string('total_investment_portfolio_achieve_annual_household_today')->nullable();
            $table->string('present_value_required')->nullable();
            $table->string('encoded_by')->nullable();
            $table->string('date_encoded')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_indepandance');
    }
};
