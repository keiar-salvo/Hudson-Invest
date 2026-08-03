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
        Schema::create('net__assets', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('encoded_by')->nullable();
            $table->string('date_encoded')->nullable();
            $table->string('net_assets_market_value')->nullable();
            $table->string('net_assets_client')->nullable();
            $table->string('net_assets_partner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('net__assets');
    }
};
