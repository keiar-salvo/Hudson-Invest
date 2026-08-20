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
        Schema::create('current_positions', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('gross_anual_income_client')->nullable();
            $table->string('gross_anual_income_partner')->nullable();
            $table->string('total_houese_hold_income')->nullable();
            $table->string('your_home_value_of_your_home')->nullable();
            $table->string('your_home_mortgage')->nullable();
            $table->string('equity_in_your_home')->nullable();
            $table->string('investment_portfolio_long_term_savings')->nullable();
            $table->string('investment_portfolio_superannuation_client_net_value')->nullable();
            $table->string('investment_portfolio_superannuation_partner_net_value')->nullable();
            $table->string('investment_portfolio_shares_net_value')->nullable();
            $table->string('investment_portfolio_business_net_value')->nullable();
            $table->string('investment_portfolio_existing_investment_property')->nullable();
            $table->string('investment_portfolio_mortgage')->nullable();
            $table->string('investment_portfolio_total')->nullable();
            $table->string('investment_portfolio_net_position')->nullable();
            $table->string('investment_portfolio_repay_mortgage')->nullable();
            $table->string('investment_portfolio_current_net_financial_assets')->nullable();
            $table->string('projected_value_of_your_home')->nullable();
            $table->string('investment_portfolio_assets_superannuation')->nullable();
            $table->string('investment_portfolio_assets_long_term_savings')->nullable();
            $table->string('investment_portfolio_assets_shares')->nullable();
            $table->string('investment_portfolio_assets_business_net_value')->nullable();
            $table->string('investment_portfolio_assets_existing_investment_property')->nullable();
            $table->string('investment_portfolio_assets_mortgage')->nullable();
            $table->string('investment_portfolio_net_financial_assets')->nullable();
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
        Schema::dropIfExists('current_positions');
    }
};
