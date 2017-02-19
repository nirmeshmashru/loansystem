<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLoans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->string('amount')->nullable();
            $table->string('period')->nullable();
            $table->string('status')->nullable();
            $table->string('address')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('pobox')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer')->nullable();
            $table->string('employment_start_time')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('house_hold_people')->nullable();
            $table->string('move_to_current_address')->nullable();
            $table->string('gross_monthly_income')->nullable();
            $table->string('net_monthly_income')->nullable();
            $table->string('living_expenses')->nullable();
            $table->string('other_loan_expenses')->nullable();
            $table->string('monthly_payment_other_loan')->nullable();
            $table->string('apartment_size')->nullable();
            $table->string('accomodation_type')->nullable();
            $table->string('education_level')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('apartment_type')->nullable();
            $table->string('summer_cottage')->nullable();
            $table->string('credit_cards')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('loans');
    }
}
