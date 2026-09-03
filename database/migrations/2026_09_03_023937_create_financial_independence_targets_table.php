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
        Schema::create('financial_independence_targets', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('current_net_financial_assets')->nullable();
            $table->string('total_investment_portfolio_required')->nullable();
            $table->string('total_annual_household_income_retirement')->nullable();
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
        Schema::dropIfExists('financial_independence_targets');
    }
};
