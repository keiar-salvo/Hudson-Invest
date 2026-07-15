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
        Schema::create('personal_details', function (Blueprint $table) {
        
            $table->string('details_id');
            $table->string('name');
            $table->string('residential_address');
            $table->string('phone_home');
            $table->string('phone_mobile');
            $table->string('email');
            $table->integer('age_client');
            $table->integer('age_partner');
            $table->integer('age_average');
            $table->string('amount_per_week');
            $table->date('initial_appointment_date');
            $table->string('desired_retirement_age');
            $table->string('in_seven_years');
            $table->string('in_fourteen_years');
            $table->string('in_twenty_one_years');
            $table->string('encoded_by');
            $table->date('date_encoded');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};
