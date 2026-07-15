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
       	 Schema::create('financial_independences', function (Blueprint $table) {
         
            $table->string('details_id');
            $table->integer('target_age');
            $table->integer('years_to_target_age');
            $table->string('desired_retirement_date');
            $table->string('current_income_required_in_retirement');
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
        Schema::dropIfExists('financail_independence');
    }
};
