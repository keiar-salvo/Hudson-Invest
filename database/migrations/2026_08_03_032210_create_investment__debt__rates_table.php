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
        Schema::create('investment__debt__rates', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('investment_debt_rates')->nullable();
            $table->string('investment_debt_rates_business_loans')->nullable();
            $table->string('mortgage_existing_investment_properties')->nullable();
            $table->string('mortgage_new_investment_properties')->nullable();
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
        Schema::dropIfExists('investment__debt__rates');
    }
};
