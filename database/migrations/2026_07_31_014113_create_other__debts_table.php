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
        Schema::create('other__debts', function (Blueprint $table) {
            $table->id();
            $table->string('details_id');
            $table->string('other_debt')->nullable();
            $table->string('other_debt_client_percentage')->nullable();
            $table->string('other_debt_partner_percentage')->nullable();
            $table->string('other_debt_market_value')->nullable();
            $table->string('other_debt_client')->nullable();
            $table->string('other_debt_parnter')->nullable();
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
        Schema::dropIfExists('other__debts');
    }
};
