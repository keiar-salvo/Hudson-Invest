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
            $table->string('user_id')->nullable();;
            $table->string('details_id')->nullable();;
            $table->string('name')->nullable();;
            $table->string('residential_address')->nullable();;
            $table->string('phone_home')->nullable();;
            $table->string('phone_mobile')->nullable();;
            $table->string('email')->nullable();;
            $table->integer('age_client')->nullable();
            $table->integer('age_partner')->nullable();
            $table->integer('age_average')->nullable();
            $table->string('amount_per_week')->nullable();;
            $table->date('initial_appointment_date')->nullable();;
            $table->string('desired_retirement_age')->nullable();;
            $table->string('in_seven_years')->nullable();;
            $table->string('in_fourteen_years')->nullable();;
            $table->string('in_twenty_one_years')->nullable();;
            $table->date('date_encoded')->nullable();;
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
