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
        Schema::create('yearly__investment__portfolios', function (Blueprint $table) {
            $table->string('details_id')->unique();
      	    $table->text('year')->nullable();         
    	    $table->text('yearly_value')->nullable();
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
        Schema::dropIfExists('yearly__investment__portfolios');
    }
};
