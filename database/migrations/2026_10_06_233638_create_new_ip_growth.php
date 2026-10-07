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
        Schema::create('new_ip_growth', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->string('existing_investment_mortgage')->nullable();
            $table->string('new_ip1_mortgage')->nullable();
            $table->string('new_ip2_mortgage')->nullable();
            $table->string('new_ip3_mortgage')->nullable();
            $table->string('new_ip4_mortgage')->nullable();
            $table->string('new_ip5_mortgage')->nullable();
            $table->string('new_ip6_mortgage')->nullable();
            $table->string('new_ip7_mortgage')->nullable();
            $table->string('total_propeties_mortgage')->nullable();
            $table->string('grand_total_propeties_mortgage')->nullable();
            $table->string('existing_investment')->nullable();
            $table->string('new_ip1')->nullable();
            $table->string('new_ip2')->nullable();
            $table->string('new_ip3')->nullable();
            $table->string('new_ip4')->nullable();
            $table->string('new_ip5')->nullable();
            $table->string('new_ip6')->nullable();
            $table->string('new_ip7')->nullable();
            $table->string('total_properties_value')->nullable();
            $table->string('grand_properties_value')->nullable();
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
        Schema::dropIfExists('new_ip_growth');
    }
};
