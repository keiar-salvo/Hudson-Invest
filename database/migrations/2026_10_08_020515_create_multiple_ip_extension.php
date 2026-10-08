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
        Schema::create('multiple_ip_extension', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('new_investment_property4_current_value')->nullable();
            $table->string('new_investment_property4_retirement_value')->nullable();
            $table->string('less_investment_prop4_mortgage_current_value')->nullable();
            $table->string('less_investment_prop4_mortgage_retirement_value')->nullable();
            $table->string('equity_investment4_current_value')->nullable();
            $table->string('equity_investment4_retirement_value')->nullable();
            $table->string('new_investment_property5_current_value')->nullable();
            $table->string('new_investment_property5_retirement_value')->nullable();
            $table->string('less_investment_prop5_mortgage_current_value')->nullable();
            $table->string('less_investment_prop5_mortgage_retirement_value')->nullable();
            $table->string('equity_investment5_current_value')->nullable();
            $table->string('equity_investment5_retirement_value')->nullable();
            $table->string('new_investment_property6_current_value')->nullable();
            $table->string('new_investment_property6_retirement_value')->nullable();
            $table->string('less_investment_prop6_mortgage_current_value')->nullable();
            $table->string('less_investment_prop6_mortgage_retirement_value')->nullable();
            $table->string('equity_investment6_current_value')->nullable();
            $table->string('equity_investment6_retirement_value')->nullable();
            $table->string('new_investment_property7_current_value')->nullable();
            $table->string('new_investment_property7_retirement_value')->nullable();
            $table->string('less_investment_prop7_mortgage_current_value')->nullable();
            $table->string('less_investment_prop7_mortgage_retirement_value')->nullable();
            $table->string('equity_investment7_current_value')->nullable();
            $table->string('equity_investment7_retirement_value')->nullable();
            $table->string('multi_ext_total_investment_property_value')->nullable();
            $table->string('multi_ext_total_investment_property_retirement_value')->nullable();
            $table->string('multi_ext_total_less_investment_prop_mortgage_value')->nullable();
            $table->string('multi_ext_total_less_investment_prop_mortgage_retirement_value')->nullable();
            $table->string('multi_ext_equity_investment_prop_port_current_value')->nullable();
            $table->string('multi_ext_equity_investment_prop_port_retirement_value')->nullable();
            $table->string('multi_ext_total_investment_value')->nullable();
            $table->string('multi_ext_total_investment_retirement_value')->nullable();
            $table->string('multi_ext_investment_portfolio_target_current_value')->nullable();
            $table->string('multi_ext_investment_portfolio_target_retirement_value')->nullable();
            $table->string('multi_ext_total_shortfall_value')->nullable();
            $table->string('multi_ext_total_shortfall_retirement_value')->nullable();
            $table->string('multi_ext_houesehold_income_target_current_value')->nullable();
            $table->string('multi_ext_houesehold_income_target_retirement_value')->nullable();
            $table->string('multi_ext_estimated_income_current_value')->nullable();
            $table->string('multi_ext_estimated_income_retirement_value')->nullable();
            $table->string('multi_ext_estimated_total_income_value')->nullable();
            $table->string('multi_ext_estimated_total_income_retirement_value')->nullable();
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
        Schema::dropIfExists('multiple_ip_extension');
    }
};
