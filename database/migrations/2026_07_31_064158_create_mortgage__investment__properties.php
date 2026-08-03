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
        Schema::create('mortgage__investment__properties', function (Blueprint $table) {
            $table->id();
            $table->string('details_id');
            $table->string('mortgage_investment')->nullable();
            $table->string('mortgage_investment_client_percentage')->nullable();
            $table->string('mortgage_investment_partner_percentage')->nullable();
            $table->string('mortgage_investment_market_value')->nullable();
            $table->string('mortgage_investment_client')->nullable();
            $table->string('mortgage_investment_partner')->nullable();
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
        Schema::dropIfExists('mortgage__investment__properties');
    }
};
