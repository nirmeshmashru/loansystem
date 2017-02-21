<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use SoftDeletes;
    protected $table = 'loans';

    protected $fillable = ['amount','period','status','address','bank_account','pobox','occupation','employer','employment_start_time','marital_status','house_hold_people','move_to_current_address','gross_monthly_income','net_monthly_income','living_expenses','other_loan_expenses','monthly_payment_other_loan','apartment_size','accomodation_type','education_level','employment_type','apartment_type','summer_cottage','credit_cards','ip_address'];

    protected $hidden = ['updated_at','deleted_at'];

    public function customer()
    {
        return $this->hasOne(Customer::class,'id','customer_id');
    }
}
