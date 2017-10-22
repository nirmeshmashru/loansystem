<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use SoftDeletes;
    protected $table = 'loans';

    protected $fillable = ['amount','period','status','address','bank_account','pobox','occupation','employer','employment_start_time','marital_status','house_hold_people','move_to_current_address','gross_monthly_income','net_monthly_income','living_expenses','other_loan_expenses','monthly_payment_other_loan','apartment_size','accomodation_type','education_level','employment_type','apartment_type','summer_cottage','credit_cards','ip_address','monthly_payment','cost_and_interest','no_of_children','no_of_adults','citizenship','any_politically_influential','moving_time','business_id','other_income_per_month','source_of_other_income','employment_start_time_year','mortage_left','mortage_month','consumer_credit_left','consumer_credit_month','boat_loan_left','boat_loan_month','credit_card_left','credit_card_month','quick_loan_left','quick_loan_month','guarantees_left','guarantees_month','payabal_maintance_left','payabal_maintance_month','installment_paln_left','installment_paln_month','other_debts_left','other_debts_month','housing_cost_month','other_expenses_month','monthly_income_of_spouse','monthly_cost_of_spouse','bic','joint_partner','joint_first_name','joint_last_name','joint_ssn','joint_email','joint_phone','joint_net_salary_per_month','joint_education_level','joint_employment_type','joint_business_id','mortage_joint_left','mortage_joint_month','consumer_credit_joint_left','consumer_credit_joint_month','boat_loan_joint_left','boat_loan_joint_month','credit_card_joint_left','credit_card_joint_month','quick_loan_joint_left','quick_loan_joint_month','guarantees_joint_left','guarantees_joint_month','payabal_maintance_joint_left','payabal_maintance_joint_month','installment_paln_joint_left','installment_paln_joint_month','other_debts_joint_left','other_debts_joint_month','joint_venture_approval','purpose_of_loan'];

    protected $hidden = ['updated_at','deleted_at'];

    public function customer()
    {
        return $this->hasOne(Customer::class,'id','customer_id');
    }
}
