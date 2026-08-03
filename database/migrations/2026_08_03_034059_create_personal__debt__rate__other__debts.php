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
        Schema::create('personal__debt__rate__other__debts', function (Blueprint $table) {
            $table->id();
            $table->string('details_id');
            $table->string('personal_debt_rate_other_debts')->nullable();
            $table->string('personal_debt_rate_other_debt_years')->nullable();
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
        Schema::dropIfExists('personal__debt__rate__other__debts');
    }
};
