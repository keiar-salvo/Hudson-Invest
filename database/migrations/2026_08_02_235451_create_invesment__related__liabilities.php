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
        Schema::create('invesment__related__liabilities', function (Blueprint $table) {
           $table->string('details_id')->unique();
            $table->string('margin_investment_loans')->nullable();
            $table->string('margin_investment_client_percentage')->nullable();
            $table->string('margin_investment_partner_percentage')->nullable();
            $table->string('margin_investment_market_value')->nullable();
            $table->string('margin_investment_client')->nullable();
            $table->string('margin_investment_partner')->nullable();
			$table->string('business_loans')->nullable();
            $table->string('business_loans_client_percentage')->nullable();
            $table->string('business_loans_partner_percentage')->nullable();
            $table->string('business_loans_market_value')->nullable();
            $table->string('business_loans_client')->nullable();
            $table->string('business_loans_partner')->nullable();
            $table->string('total_related_liabilities_market_value')->nullable();
            $table->string('total_related_liabilities_client')->nullable();
            $table->string('total_related_liabilities_partner')->nullable();
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
        Schema::dropIfExists('invesment__related__liabilities');
    }
};
