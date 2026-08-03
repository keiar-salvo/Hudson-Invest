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
        Schema::create('credit__cards', function (Blueprint $table) {
            $table->id();
            $table->string('details_id');
            $table->string('credit_card')->nullable();
            $table->string('credit_card_client_percentage')->nullable();
            $table->string('credit_card_partner_percentage')->nullable();
            $table->string('credit_card_market_value')->nullable();
            $table->string('credit_card_client')->nullable();
            $table->string('credit_card_partner')->nullable();
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
        Schema::dropIfExists('credit__cards');
    }
};
