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
        Schema::create('investment__assets', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('long_term_investment_asset')->nullable();
            $table->string('long_term_client_percentage')->nullable();
            $table->string('long_term_partner_percentage')->nullable();
            $table->string('long_term_market_value')->nullable();
            $table->string('long_term_client')->nullable();
            $table->string('long_term_partner')->nullable();
            $table->string('superannuation_client_net')->nullable();
            $table->string('superannuation_client_client_percentage')->nullable();
            $table->string('superannuation_client_partner_percentage')->nullable();
            $table->string('superannuation_client_market_value')->nullable();
            $table->string('superannuation_client_client')->nullable();
            $table->string('superannuation_client_partner')->nullable();
            $table->string('superannuation_partner_net')->nullable();
            $table->string('superannuation_partner_client_percentage')->nullable();
            $table->string('superannuation_partner_parnter_percentage')->nullable();
            $table->string('superannuation_partner_market_value')->nullable();
            $table->string('superannuation_partner_client')->nullable();
            $table->string('superannuation_partner_partner')->nullable();
            $table->string('shares_fund')->nullable();
            $table->string('shares_fund_client_percentage')->nullable();
            $table->string('shares_fund_partner_percentage')->nullable();
            $table->string('shares_fund_market_value')->nullable();
            $table->string('shares_fund_client')->nullable();
            $table->string('shares_fund_partner')->nullable();
            $table->string('business')->nullable();
            $table->string('business_client_percentage')->nullable();
            $table->string('business_partner_percentage')->nullable();
            $table->string('business_market_value')->nullable();
            $table->string('business_client')->nullable();
            $table->string('business_partner')->nullable();
            $table->string('total_investment_asset_market_value')->nullable();
            $table->string('total_investment_asset_client')->nullable();
            $table->string('total_investment_asset_partner')->nullable();
            $table->string('total_asset_market_value')->nullable();
            $table->string('total_asset_client')->nullable();
            $table->string('total_asset_partner')->nullable();
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
        Schema::dropIfExists('investment__assets');
    }
};
