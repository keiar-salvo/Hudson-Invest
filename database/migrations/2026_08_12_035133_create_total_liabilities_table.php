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
        Schema::create('total_liabilities', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('total_liabilities_market_value')->nullable();
            $table->string('total_liabilities_client')->nullable();
            $table->string('total_liabilities_partner')->nullable();
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
        Schema::dropIfExists('total_liabilities');
    }
};
