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
        Schema::create('income', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('salary_frequency')->nullable();
            $table->string('salary_client')->nullable();
            $table->string('salary_partner')->nullable();
            $table->string('salary_client_annual')->nullable();
            $table->string('salary_partner_annual')->nullable();

            $table->string('bonus_frequency')->nullable();
            $table->string('bonus_client')->nullable();
            $table->string('bonus_partner')->nullable();
            $table->string('bonus_client_annual')->nullable();
            $table->string('bonus_partner_annual')->nullable();

            $table->string('interest_income_frequency')->nullable();
            $table->string('interest_income_client')->nullable();
            $table->string('interest_income_partner')->nullable();
            $table->string('interest_income_client_annual')->nullable();
            $table->string('interest_income_partner_annual')->nullable();

            $table->string('rental_income_frequency')->nullable();
            $table->string('rental_income_client')->nullable();
            $table->string('rental_income_partner')->nullable();
            $table->string('rental_income_client_annual')->nullable();
            $table->string('rental_income_partner_annual')->nullable();

            $table->string('dividend_income_frequency')->nullable();
            $table->string('dividend_income_client')->nullable();
            $table->string('dividend_income_partner')->nullable();
            $table->string('dividend_income_client_annual')->nullable();
            $table->string('dividend_income_partner_annual')->nullable();

            $table->string('ss_income_frequency')->nullable();
            $table->string('ss_income_client')->nullable();
            $table->string('ss_income_partner')->nullable();
            $table->string('ss_income_client_annual')->nullable();
            $table->string('ss_income_partner_annual')->nullable();

            $table->string('business_income_frequency')->nullable();
            $table->string('business_income_client')->nullable();
            $table->string('business_income_partner')->nullable();
            $table->string('business_income_client_annual')->nullable();
            $table->string('business_income_partner_annual')->nullable();

            $table->string('other_income_frequency')->nullable();
            $table->string('other_income_client')->nullable();
            $table->string('other_income_partner')->nullable();
            $table->string('other_income_client_annual')->nullable();
            $table->string('other_income_partner_annual')->nullable();

        
            $table->string('total_income_client_annual')->nullable();
            $table->string('total_income_partner_annual')->nullable();
          

            $table->string('encoded_by');
            $table->string('date_encoded');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income');
    }
};
