<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLoansAddNewColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loans',function (Blueprint $table){
           $table->text('monthly_payment')->nullable();
           $table->text('cost_and_interest')->nullable();
           $table->text('no_of_children')->nullable();
           $table->text('no_of_adults')->nullable();
           $table->text('citizenship')->nullable();
           $table->tinyInteger('any_politically_influential')->default(0);
           $table->text('moving_time')->nullable();
           $table->text('business_id')->nullable();
           $table->text('other_income_per_month')->nullable();
           $table->text('source_of_other_income')->nullable();
           $table->text('employment_start_time_year')->nullable();
           $table->text('mortage_left')->nullable();
           $table->text('mortage_month')->nullable();
           $table->text('consumer_credit_left')->nullable();
           $table->text('consumer_credit_month')->nullable();
           $table->text('boat_loan_left')->nullable();
           $table->text('boat_loan_month')->nullable();
            $table->text('credit_card_left')->nullable();
            $table->text('credit_card_month')->nullable();
            $table->text('quick_loan_left')->nullable();
            $table->text('quick_loan_month')->nullable();
            $table->text('guarantees_left')->nullable();
            $table->text('guarantees_month')->nullable();
            $table->text('payabal_maintance_left')->nullable();
            $table->text('payabal_maintance_month')->nullable();
            $table->text('installment_paln_left')->nullable();
            $table->text('installment_paln_month')->nullable();
            $table->text('other_debts_left')->nullable();
            $table->text('other_debts_month')->nullable();
            $table->text('housing_cost_month')->nullable();
            $table->text('other_expenses_month')->nullable();
            $table->text('monthly_income_of_spouse')->nullable();
            $table->text('monthly_cost_of_spouse')->nullable();
            $table->text('bic')->nullable();
            $table->tinyInteger('joint_partner')->default(0);

            $table->text('joint_first_name')->nullable();
            $table->text('joint_last_name')->nullable();
            $table->text('joint_ssn')->nullable();
            $table->text('joint_email')->nullable();
            $table->text('joint_phone')->nullable();
            $table->text('joint_net_salary_per_month')->nullable();
            $table->text('joint_education_level')->nullable();
            $table->text('joint_employment_type')->nullable();
            $table->text('joint_business_id')->nullable();

            $table->text('mortage_joint_left')->nullable();
            $table->text('mortage_joint_month')->nullable();
            $table->text('consumer_credit_joint_left')->nullable();
            $table->text('consumer_credit_joint_month')->nullable();
            $table->text('boat_loan_joint_left')->nullable();
            $table->text('boat_loan_joint_month')->nullable();
            $table->text('credit_card_joint_left')->nullable();
            $table->text('credit_card_joint_month')->nullable();
            $table->text('quick_loan_joint_left')->nullable();
            $table->text('quick_loan_joint_month')->nullable();
            $table->text('guarantees_joint_left')->nullable();
            $table->text('guarantees_joint_month')->nullable();
            $table->text('payabal_maintance_joint_left')->nullable();
            $table->text('payabal_maintance_joint_month')->nullable();
            $table->text('installment_paln_joint_left')->nullable();
            $table->text('installment_paln_joint_month')->nullable();
            $table->text('other_debts_joint_left')->nullable();
            $table->text('other_debts_joint_month')->nullable();

            $table->tinyInteger('joint_venture_approval')->default(0);
            $table->text('purpose_of_loan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
