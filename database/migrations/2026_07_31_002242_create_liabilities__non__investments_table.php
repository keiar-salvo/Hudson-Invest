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
        Schema::create('liabilities__non__investments', function (Blueprint $table) {
           $table->string('details_id')->unique();
            $table->string('mortgage_residence')->nullable();
            $table->string('mortgage_client_percentage')->nullable();
            $table->string('mortgage_partner_percentage')->nullable();
            $table->string('mortgage_market_value')->nullable();
            $table->string('mortgage_client')->nullable();
            $table->string('mortgage_partner')->nullable();
            $table->string('personal_loans')->nullable();
            $table->string('personal_loans_client_percentage')->nullable();
            $table->string('personal_loans_partner_percentage')->nullable();
            $table->string('personal_loans_market_value')->nullable();
            $table->string('personal_loans_client')->nullable();
            $table->string('personal_loans_partner')->nullable();
            $table->string('car_loans')->nullable();
            $table->string('car_loans_client_percentage')->nullable();
            $table->string('car_loans_partner_percentage')->nullable();
            $table->string('car_loans_market_value')->nullable();
            $table->string('car_loans_client')->nullable();
            $table->string('car_loans_partner')->nullable();
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
        Schema::dropIfExists('liabilities__non__investments');
    }
};
