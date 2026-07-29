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
        Schema::create('other__personal__assets__non__invesmtments', function (Blueprint $table) {
            $table->id();
            $table->string('details_id');
            $table->string('other_personal_asset')->nullable();
            $table->string('non_investment_asset_client_percentage')->nullable();
            $table->string('non_investment_asset_partner_percentage')->nullable();
            $table->string('non_investment_asset_market_value')->nullable();
            $table->string('non_investment_asset_client')->nullable();
            $table->string('non_investment_asset_partner')->nullable();
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
        Schema::dropIfExists('other__personal__assets__non__invesmtments');
    }
};
