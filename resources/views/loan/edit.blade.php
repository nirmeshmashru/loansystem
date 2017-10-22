@extends('layouts.admin')

@section('css')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Loan Details
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit Loan Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            {{ Form::open(['method' => 'PUT', 'route' => ['loan.update', $loan->id]]) }}
                                <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Amount</th>
                                    <td><input type="text" class="form-control" name="amount" value="{{$loan->amount}}"/></td>
                                </tr>
                                <tr>
                                    <th>Period</th>
                                    <td><input type="text" class="form-control" name="period" value="{{$loan->period}}"/></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <select class="form-control" name="status">
                                            <option value="Pending" @if($loan->status == 'Pending')selected="selected"@endif>Pending</option>
                                            <option value="Approved" @if($loan->status == 'Approved')selected="selected"@endif>Approved</option>
                                            <option value="Declined" @if($loan->status == 'Declined')selected="selected"@endif>Declined</option>
                                        </select>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><input type="text" class="form-control" name="address" value="{{$loan->address}}"/></td>
                                </tr>
                                <tr>
                                    <th>Bank A/C</th>
                                    <td><input type="text" class="form-control" name="bank_account" value="{{$loan->bank_account}}"/></td>
                                </tr>
                                <tr>
                                    <th>PO BOX</th>
                                    <td><input type="text" class="form-control" name="pobox" value="{{$loan->pobox}}"/></td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td><input type="text" class="form-control" name="occupation" value="{{$loan->occupation}}"/></td>
                                </tr>
                                <tr>
                                    <th>Employer</th>
                                    <td><input type="text" class="form-control" name="employer" value="{{$loan->employer}}"/></td>
                                </tr>
                                <tr>
                                    <th>Employment Start Time</th>
                                    <td><input type="text" class="form-control" name="employment_start_time" value="{{$loan->employment_start_time}}"/></td>
                                </tr>
                                <tr>
                                    <th>Employment Start Time Year</th>
                                    <td><input type="text" class="form-control" name="employment_start_time_year" value="{{$loan->employment_start_time_year}}"/></td>
                                </tr>
                                <tr>
                                    <th>Marital Status</th>
                                    <td><input type="text" class="form-control" name="marital_status" value="{{$loan->marital_status}}"/></td>
                                    {{--<td>
                                        <select name="marital_status" class="form-control">
                                            <option value="Married" @if($loan->marital_status == "Married")selected="selected"@endif>Married</option>
                                            <option value="Cohabitation" @if($loan->marital_status == "Cohabitation")selected="selected"@endif>Cohabitation</option>
                                            <option value="Unmarried" @if($loan->marital_status == "Unmarried")selected="selected"@endif>Unmarried</option>
                                            <option value="Divorced" @if($loan->marital_status == "Divorced")selected="selected"@endif>Divorced</option>
                                            <option value="Widow" @if($loan->marital_status == "Widow")selected="selected"@endif>Widow</option>
                                        </select>
                                    </td>--}}
                                </tr>
                                <tr>
                                    <th>House Hold People</th>
                                    <td>
                                        <select name="house_hold_people" class="form-control">
                                            <option value="None" @if($loan->house_hold_people == "None")selected="selected"@endif>None</option>
                                            <option value="1" @if($loan->house_hold_people == "1")selected="selected"@endif>1</option>
                                            <option value="2" @if($loan->house_hold_people == "2")selected="selected"@endif>2</option>
                                            <option value="3" @if($loan->house_hold_people == "3")selected="selected"@endif>3</option>
                                            <option value="4" @if($loan->house_hold_people == "4")selected="selected"@endif>4</option>
                                            <option value="5" @if($loan->house_hold_people == "5")selected="selected"@endif>5</option>
                                            <option value="6" @if($loan->house_hold_people == "6")selected="selected"@endif>6</option>
                                            <option value="More then 6" @if($loan->house_hold_people == "More then 6")selected="selected"@endif>More then 6</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Move To Current Address</th>
                                    <td><input type="text" class="form-control" name="move_to_current_address" value="{{$loan->move_to_current_address}}"/></td>
                                </tr>
                                <tr>
                                    <th>Gross Monthly Income</th>
                                    <td><input type="text" class="form-control" name="gross_monthly_income" value="{{$loan->gross_monthly_income}}"/></td>
                                </tr>
                                <tr>
                                    <th>Net Monthly Income</th>
                                    <td><input type="text" class="form-control" name="net_monthly_income" value="{{$loan->net_monthly_income}}"/></td>
                                </tr>
                                <tr>
                                    <th>Living Expenses</th>
                                    <td><input type="text" class="form-control" name="living_expenses" value="{{$loan->living_expenses}}"/></td>
                                </tr>
                                <tr>
                                    <th>Other Loan Expenses</th>
                                    <td><input type="text" class="form-control" name="other_loan_expenses" value="{{$loan->other_loan_expenses}}"/></td>
                                </tr>
                                <tr>
                                    <th>PO BOX</th>
                                    <td><input type="text" class="form-control" name="pobox" value="{{$loan->pobox}}"/></td>
                                </tr>
                                <tr>
                                    <th>Monthly Payment Other Loan</th>
                                    <td><input type="text" class="form-control" name="monthly_payment_other_loan" value="{{$loan->monthly_payment_other_loan}}"/></td>
                                </tr>
                                <tr>
                                    <th>Apartment Size</th>
                                    <td><input type="text" class="form-control" name="apartment_size" value="{{$loan->apartment_size}}"/></td>
                                </tr>
                                <tr>
                                    <th>Accomodation Type</th>
                                    <td><input type="text" class="form-control" name="accomodation_type" value="{{$loan->accomodation_type}}"/></td>
                                </tr>
                                <tr>
                                    <th>Education Level</th>
                                    <td><input type="text" class="form-control" name="education_level" value="{{$loan->education_level}}"/></td>
                                    {{--<td>
                                        <select name="education_level" class="form-control">
                                            <option value="Primary School" @if($loan->education_level == "Primary School")@endif>Primary School</option>
                                            <option value="High School" @if($loan->education_level == "High School")@endif>High School</option>
                                            <option value="Vocational School" @if($loan->education_level == "Vocational School")@endif>Vocational School</option>
                                            <option value="Bachelors Degree" @if($loan->education_level == "Bachelors School")@endif>Bachelors Degree</option>
                                            <option value="Master Degree" @if($loan->education_level == "Master School")@endif>Master Degree</option>
                                        </select>
                                    </td>--}}
                                </tr>
                                <tr>
                                    <th>Employment Type</th>
                                    <td><input type="text" class="form-control" name="employment_type" value="{{$loan->employment_type}}"/></td>
                                    {{--<td>
                                        <select name="employment_type" class="form-control">
                                            <option value="Forced" @if($loan->employment_type == "Forced")selected="selected"@endif>Forced</option>
                                            <option value="Temporary" @if($loan->employment_type == "Temporary")selected="selected"@endif>Temporary</option>
                                            <option value="Project Worker" @if($loan->employment_type == "Project Worker")selected="selected"@endif>Project Worker</option>
                                            <option value="Entrepreneur" @if($loan->employment_type == "Entrepreneur")selected="selected"@endif>Entrepreneur</option>
                                            <option value="Unemployed" @if($loan->employment_type == "Unemployed")selected="selected"@endif>Unemployed</option>
                                            <option value="Pensioner" @if($loan->employment_type == "Pensioner")selected="selected"@endif>Pensioner</option>
                                            <option value="Student" @if($loan->employment_type == "Student")selected="selected"@endif>Student</option>
                                        </select>
                                    </td>--}}
                                </tr>
                                <tr>
                                    <th>Apartment Type</th>
                                    <td><input type="text" class="form-control" name="apartment_type" value="{{$loan->apartment_type}}"/></td>
                                    {{--<td>

                                        <select name="apartment_type" class="form-control">
                                            <option value="Own" @if($loan->apartment_type == "Own")selected="selected"@endif>Own</option>
                                            <option value="Asumisoikeus" @if($loan->apartment_type == "Asumisoikeus")selected="selected"@endif>Asumisoikeus</option>
                                            <option value="Fractional Ownership" @if($loan->apartment_type == "Fractional Ownership")selected="selected"@endif>Fractional Ownership</option>
                                            <option value="Rental" @if($loan->apartment_type == "Rental")selected="selected"@endif>Rental</option>
                                            <option value="At parents" @if($loan->apartment_type == "At parents")selected="selected"@endif>At parents</option>
                                        </select>
                                    </td>--}}
                                </tr>
                                <tr>
                                    <th>Summer Cottage</th>
                                    <td><input type="text" class="form-control" name="summer_cottage" value="{{$loan->summer_cottage}}"/></td>
                                </tr>
                                <tr>
                                    <th>Credit Cards</th>
                                    <td><input type="text" class="form-control" name="credit_cards" value="{{$loan->credit_cards}}"/></td>
                                </tr>

                                <tr>
                                    <th>Monthly Payment</th>
                                    <td><input type="text" class="form-control" name="monthly_payment" value="{{$loan->monthly_payment}}"/></td>
                                </tr>
                                <tr>
                                    <th>Cost & Interest</th>
                                    <td><input type="text" class="form-control" name="cost_and_interest" value="{{$loan->cost_and_interest}}"/></td>
                                </tr>
                                <tr>
                                    <th>No of children</th>
                                    <td><input type="text" class="form-control" name="no_of_children" value="{{$loan->no_of_children}}"/></td>
                                </tr>
                                <tr>
                                    <th>citizenship</th>
                                    <td><input type="text" class="form-control" name="citizenship" value="{{$loan->citizenship}}"/></td>
                                </tr>
                                <tr>
                                    <th>Any Politically Influential?</th>
                                    <td><input type="text" class="form-control" name="any_politically_influential" value="{{$loan->any_politically_influential}}"/></td>
                                </tr>
                                <tr>
                                    <th>No of children</th>
                                    <td><input type="text" class="form-control" name="no_of_children" value="{{$loan->no_of_children}}"/></td>
                                </tr>
                                <tr>
                                    <th>Moving Time</th>
                                    <td><input type="text" class="form-control" name="moving_time" value="{{$loan->moving_time}}"/></td>
                                </tr>
                                <tr>
                                    <th>Business Id</th>
                                    <td><input type="text" class="form-control" name="business_id" value="{{$loan->business_id}}"/></td>
                                </tr>
                                <tr>
                                    <th>Other Income Per Month</th>
                                    <td><input type="text" class="form-control" name="other_income_per_month" value="{{$loan->other_income_per_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>Source of other income</th>
                                    <td><input type="text" class="form-control" name="source_of_other_income" value="{{$loan->source_of_other_income}}"/></td>
                                </tr>
                                <tr>
                                    <th>Mortage Left</th>
                                    <td><input type="text" class="form-control" name="mortage_left" value="{{$loan->mortage_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>Mortage month</th>
                                    <td><input type="text" class="form-control" name="mortage_month" value="{{$loan->mortage_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>Consumer credit left</th>
                                    <td><input type="text" class="form-control" name="consumer_credit_left" value="{{$loan->consumer_credit_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>Consumer credit month</th>
                                    <td><input type="text" class="form-control" name="consumer_credit_month" value="{{$loan->consumer_credit_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>Boat loan left</th>
                                    <td><input type="text" class="form-control" name="boat_loan_left" value="{{$loan->boat_loan_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>Boat loan month</th>
                                    <td><input type="text" class="form-control" name="boat_loan_month" value="{{$loan->boat_loan_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>Credit card left</th>
                                    <td><input type="text" class="form-control" name="credit_card_left" value="{{$loan->credit_card_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>Credit card month</th>
                                    <td><input type="text" class="form-control" name="credit_card_month" value="{{$loan->credit_card_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>Quick loan left</th>
                                    <td><input type="text" class="form-control" name="quick_loan_left" value="{{$loan->quick_loan_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>Quick loan month</th>
                                    <td><input type="text" class="form-control" name="quick_loan_month" value="{{$loan->quick_loan_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>Guarantees Left</th>
                                    <td><input type="text" class="form-control" name="guarantees_left" value="{{$loan->guarantees_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>Guarantees month</th>
                                    <td><input type="text" class="form-control" name="guarantees_month" value="{{$loan->guarantees_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>Payabal maintance left</th>
                                    <td><input type="text" class="form-control" name="payabal_maintance_left" value="{{$loan->payabal_maintance_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>payabal_maintance_month</th>
                                    <td><input type="text" class="form-control" name="payabal_maintance_month" value="{{$loan->payabal_maintance_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>installment_paln_left</th>
                                    <td><input type="text" class="form-control" name="installment_paln_left" value="{{$loan->installment_paln_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>installment_paln_month</th>
                                    <td><input type="text" class="form-control" name="installment_paln_month" value="{{$loan->installment_paln_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>other_debts_left</th>
                                    <td><input type="text" class="form-control" name="other_debts_left" value="{{$loan->other_debts_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>other_debts_month</th>
                                    <td><input type="text" class="form-control" name="other_debts_month" value="{{$loan->other_debts_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>housing_cost_month</th>
                                    <td><input type="text" class="form-control" name="housing_cost_month" value="{{$loan->housing_cost_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>other_expenses_month</th>
                                    <td><input type="text" class="form-control" name="other_expenses_month" value="{{$loan->other_expenses_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>monthly_income_of_spouse</th>
                                    <td><input type="text" class="form-control" name="monthly_income_of_spouse" value="{{$loan->monthly_income_of_spouse}}"/></td>
                                </tr>
                                <tr>
                                    <th>monthly_cost_of_spouse</th>
                                    <td><input type="text" class="form-control" name="monthly_cost_of_spouse" value="{{$loan->monthly_cost_of_spouse}}"/></td>
                                </tr>
                                <tr>
                                    <th>bic</th>
                                    <td><input type="text" class="form-control" name="bic" value="{{$loan->bic}}"/></td>
                                </tr>
                                <tr>
                                    <th>Is Joint partner?</th>
                                    <td><input type="text" class="form-control" name="joint_partner" value="{{$loan->joint_partner}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_first_name</th>
                                    <td><input type="text" class="form-control" name="joint_first_name" value="{{$loan->joint_first_name}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_last_name</th>
                                    <td><input type="text" class="form-control" name="joint_last_name" value="{{$loan->joint_last_name}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_ssn</th>
                                    <td><input type="text" class="form-control" name="joint_ssn" value="{{$loan->joint_ssn}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_email</th>
                                    <td><input type="text" class="form-control" name="joint_email" value="{{$loan->joint_email}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_phone</th>
                                    <td><input type="text" class="form-control" name="joint_phone" value="{{$loan->joint_phone}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_net_salary_per_month</th>
                                    <td><input type="text" class="form-control" name="joint_net_salary_per_month" value="{{$loan->joint_net_salary_per_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_education_level</th>
                                    <td><input type="text" class="form-control" name="joint_education_level" value="{{$loan->joint_education_level}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_employment_type</th>
                                    <td><input type="text" class="form-control" name="joint_employment_type" value="{{$loan->joint_employment_type}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_business_id</th>
                                    <td><input type="text" class="form-control" name="joint_business_id" value="{{$loan->joint_business_id}}"/></td>
                                </tr>
                                <tr>
                                    <th>mortage_joint_left</th>
                                    <td><input type="text" class="form-control" name="mortage_joint_left" value="{{$loan->mortage_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>mortage_joint_month</th>
                                    <td><input type="text" class="form-control" name="mortage_joint_month" value="{{$loan->mortage_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>consumer_credit_joint_left</th>
                                    <td><input type="text" class="form-control" name="consumer_credit_joint_left" value="{{$loan->consumer_credit_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>consumer_credit_joint_month</th>
                                    <td><input type="text" class="form-control" name="consumer_credit_joint_month" value="{{$loan->consumer_credit_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>boat_loan_joint_left</th>
                                    <td><input type="text" class="form-control" name="boat_loan_joint_left" value="{{$loan->boat_loan_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>boat_loan_joint_month</th>
                                    <td><input type="text" class="form-control" name="boat_loan_joint_month" value="{{$loan->boat_loan_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>credit_card_joint_left</th>
                                    <td><input type="text" class="form-control" name="credit_card_joint_left" value="{{$loan->credit_card_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>credit_card_joint_month</th>
                                    <td><input type="text" class="form-control" name="credit_card_joint_month" value="{{$loan->credit_card_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>quick_loan_joint_left</th>
                                    <td><input type="text" class="form-control" name="quick_loan_joint_left" value="{{$loan->quick_loan_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>guarantees_joint_left</th>
                                    <td><input type="text" class="form-control" name="guarantees_joint_left" value="{{$loan->guarantees_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>guarantees_joint_month</th>
                                    <td><input type="text" class="form-control" name="guarantees_joint_month" value="{{$loan->guarantees_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>payabal_maintance_joint_left</th>
                                    <td><input type="text" class="form-control" name="payabal_maintance_joint_left" value="{{$loan->payabal_maintance_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>payabal_maintance_joint_month</th>
                                    <td><input type="text" class="form-control" name="payabal_maintance_joint_month" value="{{$loan->payabal_maintance_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>installment_paln_joint_left</th>
                                    <td><input type="text" class="form-control" name="installment_paln_joint_left" value="{{$loan->installment_paln_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>installment_paln_joint_month</th>
                                    <td><input type="text" class="form-control" name="installment_paln_joint_month" value="{{$loan->installment_paln_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>other_debts_joint_left</th>
                                    <td><input type="text" class="form-control" name="other_debts_joint_left" value="{{$loan->other_debts_joint_left}}"/></td>
                                </tr>
                                <tr>
                                    <th>other_debts_joint_month</th>
                                    <td><input type="text" class="form-control" name="other_debts_joint_month" value="{{$loan->other_debts_joint_month}}"/></td>
                                </tr>
                                <tr>
                                    <th>joint_venture_approval</th>
                                    <td><input type="text" class="form-control" name="joint_venture_approval" value="{{$loan->joint_venture_approval}}"/></td>
                                </tr>
                                <tr>
                                    <th>purpose_of_loan</th>
                                    <td><input type="text" class="form-control" name="purpose_of_loan" value="{{$loan->purpose_of_loan}}"/></td>
                                </tr>


                                <tr>
                                    <td colspan="2" class="text-center">
                                        {!! csrf_field() !!}
                                        <input type="submit" class="btn btn-success" name="save" value="save"/>
                                        <a href="{{Route('loan.index')}}" class="btn btn-default">Cancel</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            {{ Form::close() }}
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>


            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
@endsection
