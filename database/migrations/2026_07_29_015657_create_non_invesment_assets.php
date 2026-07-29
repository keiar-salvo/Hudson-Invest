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
       Schema::create('non__investment__assets', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('principle_residence')->nullable();
            $table->string('principle_client_percentage')->nullable();
            $table->string('principle_partner_percentage')->nullable();
            $table->string('principle_market_value')->nullable();
            $table->string('principle_client')->nullable();
            $table->string('principle_partner')->nullable();
            $table->string('cash_everyday')->nullable();
            $table->string('cash_client_percentage')->nullable();
            $table->string('cash_partner_percentage')->nullable();
            $table->string('cash_market_value')->nullable();
            $table->string('cash_client')->nullable();
            $table->string('cash_partner')->nullable();
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
        Schema::dropIfExists('non_invesment_assets');
    }
};
