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
        Schema::create('investment_asset', function (Blueprint $table) {
            $table->id();
            $table->string('details_id');
            $table->string('investment_property')->nullable();
            $table->string('client_percentage')->nullable();
            $table->string('partner_percentage')->nullable();
            $table->string('market_value')->nullable();
            $table->string('client')->nullable();
            $table->string('partner')->nullable();
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
        Schema::dropIfExists('investment_asset');
    }
};
