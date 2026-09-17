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
        Schema::create('proposed_new_investment_props', function (Blueprint $table) {
            $table->string('details_id')->unique();
            $table->text('ip_1')->nullable();
            $table->text('ip2_date')->nullable();
            $table->text('ip3_date')->nullable();
            $table->text('ip4_date')->nullable();
            $table->text('ip5_date')->nullable();
            $table->text('ip6_date')->nullable();
            $table->text('ip7_date')->nullable();

            $table->text('months_last_acq_ip1')->nullable();
            $table->text('months_last_acq_ip2')->nullable();
            $table->text('months_last_acq_ip3')->nullable();
            $table->text('months_last_acq_ip4')->nullable();
            $table->text('months_last_acq_ip5')->nullable();
            $table->text('months_last_acq_ip6')->nullable();
            $table->text('months_last_acq_ip7')->nullable();

            $table->text('retired_age_ip1')->nullable();
            $table->text('retired_age_ip2')->nullable();
            $table->text('retired_age_ip3')->nullable();
            $table->text('retired_age_ip4')->nullable();
            $table->text('retired_age_ip5')->nullable();
            $table->text('retired_age_ip6')->nullable();
            $table->text('retired_age_ip7')->nullable();

            $table->text('property_purchase_ip1')->nullable();
            $table->text('property_purchase_ip2')->nullable();
            $table->text('property_purchase_ip3')->nullable();
            $table->text('property_purchase_ip4')->nullable();
            $table->text('property_purchase_ip5')->nullable();
            $table->text('property_purchase_ip6')->nullable();
            $table->text('property_purchase_ip7')->nullable();
            
            $table->text('lvr_ip1')->nullable();
            $table->text('lvr_ip2')->nullable();
            $table->text('lvr_ip3')->nullable();
            $table->text('lvr_ip4')->nullable();
            $table->text('lvr_ip5')->nullable();
            $table->text('lvr_ip6')->nullable();
            $table->text('lvr_ip7')->nullable();

            $table->text('other_purchased_cost_ip1')->nullable();
            $table->text('other_purchased_cost_ip2')->nullable();
            $table->text('other_purchased_cost_ip3')->nullable();
            $table->text('other_purchased_cost_ip4')->nullable();
            $table->text('other_purchased_cost_ip5')->nullable();
            $table->text('other_purchased_cost_ip6')->nullable();
            $table->text('other_purchased_cost_ip7')->nullable();

            $table->text('loan_value_based_ip1')->nullable();
            $table->text('loan_value_based_ip2')->nullable();
            $table->text('loan_value_based_ip3')->nullable();
            $table->text('loan_value_based_ip4')->nullable();
            $table->text('loan_value_based_ip5')->nullable();
            $table->text('loan_value_based_ip6')->nullable();
            $table->text('loan_value_based_ip7')->nullable();

            $table->text('total_loan_value_ip1')->nullable();
            $table->text('total_loan_value_ip2')->nullable();
            $table->text('total_loan_value_ip3')->nullable();
            $table->text('total_loan_value_ip4')->nullable();
            $table->text('total_loan_value_ip5')->nullable();
            $table->text('total_loan_value_ip6')->nullable();
            $table->text('total_loan_value_ip7')->nullable();

            $table->text('estimated_rent_ip1')->nullable();
            $table->text('estimated_rent_ip2')->nullable();
            $table->text('estimated_rent_ip3')->nullable();
            $table->text('estimated_rent_ip4')->nullable();
            $table->text('estimated_rent_ip5')->nullable();
            $table->text('estimated_rent_ip6')->nullable();
            $table->text('estimated_rent_ip7')->nullable();

            $table->text('estimated_outgoing_ip1')->nullable();
            $table->text('estimated_outgoing_ip2')->nullable();
            $table->text('estimated_outgoing_ip3')->nullable();
            $table->text('estimated_outgoing_ip4')->nullable();
            $table->text('estimated_outgoing_ip5')->nullable();
            $table->text('estimated_outgoing_ip6')->nullable();
            $table->text('estimated_outgoing_ip7')->nullable();

            $table->text('estimated_annual_interest_ip1')->nullable();
            $table->text('estimated_annual_interest_ip2')->nullable();
            $table->text('estimated_annual_interest_ip3')->nullable();
            $table->text('estimated_annual_interest_ip4')->nullable();
            $table->text('estimated_annual_interest_ip5')->nullable();
            $table->text('estimated_annual_interest_ip6')->nullable();
            $table->text('estimated_annual_interest_ip7')->nullable();


     
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
        Schema::dropIfExists('proposed_new_investment_props');
    }
};
