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
        Schema::create('adding_new_investment_prop', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('long_term_saving_current_value')->nullable();
            $table->string('long_term_saving_retirement_value')->nullable();
            $table->string('superannuation_client_current_value')->nullable();
            $table->string('superannuation_client_retirement_value')->nullable();
            $table->string('superannuation_partner_current_value')->nullable();
            $table->string('superannuation_partner_retirement_value')->nullable();
            $table->string('shares_current_value')->nullable();
            $table->string('shares_retirement_value')->nullable();
            $table->string('business_current_value')->nullable();
            $table->string('business_retirement_value')->nullable();
            $table->string('investment__portfolio_current_value')->nullable();
            $table->string('investment__portfolio_retirement_value')->nullable();
            $table->string('existing_investment_current_value')->nullable();
            $table->string('existing_investment_retirement_value')->nullable();
            $table->string('less_existing_investment_mortgage_current_value')->nullable();
            $table->string('less_existing_investment_mortgage_retirement_value')->nullable();
            $table->string('equity_existing_property_current_value')->nullable();
            $table->string('equity_existing_property_retirement_value')->nullable();
            $table->string('new_investment_property_current_value')->nullable();
            $table->string('new_investment_property_retirement_value')->nullable();
            $table->string('less_investment_prop_mortgage_current_value')->nullable();
            $table->string('less_investment_prop_mortgage_retirement_value')->nullable();
            $table->string('equity_investment_current_value')->nullable();
            $table->string('equity_investment_retirement_value')->nullable();
            $table->string('total_investment_property_value')->nullable();
            $table->string('total_less_investment_prop_mortgage_value')->nullable();
            $table->string('total_less_investment_prop_mortgage_retirement_value')->nullable();
            $table->string('equity_investment_prop_port_current_value')->nullable();
            $table->string('equity_investment_prop_port_retirement_value')->nullable();
            $table->string('total_investment_value')->nullable();
            $table->string('total_investment_retirement_value')->nullable();
            $table->string('investment_portfolio_target_current_value')->nullable();
            $table->string('investment_portfolio_target_retirement_value')->nullable();
            $table->string('total_shortfall_value')->nullable();
            $table->string('total_shortfall_retirement_value')->nullable();
            $table->string('houesehold_income_target_current_value')->nullable();
            $table->string('houesehold_income_target_retirement_value')->nullable();
            $table->string('estimated_income_current_value')->nullable();
            $table->string('estimated_income_retirement_value')->nullable();
            $table->string('estimated_total_income_value')->nullable();
            $table->string('estimated_total_income_retirement_value')->nullable();
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
        Schema::dropIfExists('adding_new_investment_prop');
    }
};
