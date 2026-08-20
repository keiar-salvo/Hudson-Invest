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
        Schema::create('assumptions', function (Blueprint $table) {
            $table->id();
            $table->string('annual_compound_growth_rate_investment_assets');
            $table->string('annual_inflation_rate');
            $table->string('income_investment_portfolio_assets');
            $table->string('annual_interest_rate_mortgages');
            $table->string('annual_contribution_superannuation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assumptions');
    }
};
