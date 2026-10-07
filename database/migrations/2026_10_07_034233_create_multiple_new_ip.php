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
        Schema::create('multiple_new_ip', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('new_investment_property1_current_value')->nullable();
            $table->string('new_investment_property1_retirement_value')->nullable();
            $table->string('less_investment_prop1_mortgage_current_value')->nullable();
            $table->string('less_investment_prop1_mortgage_retirement_value')->nullable();
            $table->string('equity_investment1_current_value')->nullable();
            $table->string('equity_investment1_retirement_value')->nullable();
            $table->string('new_investment_property2_current_value')->nullable();
            $table->string('new_investment_property2_retirement_value')->nullable();
            $table->string('less_investment_prop2_mortgage_current_value')->nullable();
            $table->string('less_investment_prop2_mortgage_retirement_value')->nullable();
            $table->string('equity_investment2_current_value')->nullable();
            $table->string('equity_investment2_retirement_value')->nullable();
            $table->string('new_investment_property3_current_value')->nullable();
            $table->string('new_investment_property3_retirement_value')->nullable();
            $table->string('less_investment_prop3_mortgage_current_value')->nullable();
            $table->string('less_investment_prop3_mortgage_retirement_value')->nullable();
            $table->string('equity_investment3_current_value')->nullable();
            $table->string('equity_investment3_retirement_value')->nullable();
            $table->string('multi_ip_total_investment_property_current_value')->nullable();
            $table->string('multi_ip_total_investment_property_retirement_value')->nullable();
            $table->string('multi_ip_total_less_investment_prop_mortgage_value')->nullable();
            $table->string('multi_ip_total_less_investment_prop_mortgage_retirement_value')->nullable();
            $table->string('multi_ip_equity_investment_prop_port_current_value')->nullable();
            $table->string('multi_ip_equity_investment_prop_port_retirement_value')->nullable();
            $table->string('multi_ip_total_investment_value')->nullable();
            $table->string('multi_ip_total_investment_retirement_value')->nullable();
            $table->string('multi_ip_investment_portfolio_target_current_value')->nullable();
            $table->string('multi_ip_investment_portfolio_target_retirement_value')->nullable();
            $table->string('multi_ip_total_shortfall_value')->nullable();
            $table->string('multi_ip_total_shortfall_retirement_value')->nullable();
            $table->string('multi_ip_houesehold_income_target_current_value')->nullable();
            $table->string('multi_ip_houesehold_income_target_retirement_value')->nullable();
            $table->string('multi_ip_estimated_income_current_value')->nullable();
            $table->string('multi_ip_estimated_income_retirement_value')->nullable();
            $table->string('multi_ip_estimated_total_income_value')->nullable();
            $table->string('multi_ip_estimated_total_income_retirement_value')->nullable();
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
        Schema::dropIfExists('multiple_new_ip');
    }
};
