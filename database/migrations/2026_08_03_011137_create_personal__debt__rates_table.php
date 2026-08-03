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
        Schema::create('personal__debt__rates', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('personal_debt_rate_mortgage_rates')->nullable();
            $table->string('personal_debt_rate_years')->nullable();
            $table->string('personal_debt_rate_personal_loans')->nullable();
            $table->string('personal_debt_rate_personal_loans_years')->nullable();
            $table->string('personal_debt_rate_car_loans')->nullable();
            $table->string('personal_debt_rate_car_loans_years')->nullable();
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
        Schema::dropIfExists('personal__debt__rates');
    }
};
