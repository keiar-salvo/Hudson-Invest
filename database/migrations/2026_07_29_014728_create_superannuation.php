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
     	Schema::create('superannuation', function (Blueprint $table) {
           $table->string('details_id')->unique();
            $table->string('gross_salary')->nullable();
            $table->string('sg_rate')->nullable();
            $table->string('annual_contribution')->nullable();
            $table->string('quarterly_contribution')->nullable();
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
        Schema::dropIfExists('superannuation');
    }
};
