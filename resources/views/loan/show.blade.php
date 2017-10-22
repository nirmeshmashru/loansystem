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
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Loan Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Amount</th>
                                    <td>{{$loan->amount}}</td>
                                </tr>
                                <tr>
                                    <th>Period</th>
                                    <td>{{$loan->period}}</td>
                                </tr>
                                <tr>
                                    <th>Monthly Payment</th>
                                    <td>{{$loan->monthly_payment}}</td>
                                </tr>
                                <tr>
                                    <th>Cost & interest</th>
                                    <td>{{$loan->cost_and_interest}}</td>
                                </tr>
                                <tr>
                                    <th>Purpose of loan</th>
                                    <td>{{$loan->purpose_of_loan}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$loan->status}}</td>
                                </tr>
                                {{--<tr>
                                    <th>Occupation</th>
                                    <td>{{$loan->occupation}}</td>
                                </tr>--}}
                                {{--<tr>
                                    <th>House Hold People</th>
                                    <td>{{$loan->house_hold_people}}</td>
                                </tr>
                                <tr>
                                    <th>Move To Current Address</th>
                                    <td>{{$loan->move_to_current_address}}</td>
                                </tr>
                                <tr>
                                    <th>Living Expenses</th>
                                    <td>{{$loan->living_expenses}}</td>
                                </tr>
                                <tr>
                                    <th>Other Loan Expenses</th>
                                    <td>{{$loan->other_loan_expenses}}</td>
                                </tr>--}}
                                <tr>
                                    <th>IP Address</th>
                                    <td>{{$loan->ip_address}}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$loan->created_at}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Housing & Contact</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{$loan->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>PO BOX</th>
                                        <td>{{$loan->pobox}}</td>
                                    </tr>
                                    <tr>
                                        <th>PO BOX</th>
                                        <td>{{$loan->pobox}}</td>
                                    </tr>
                                    <tr>
                                        <th>Moving time</th>
                                        <td>{{$loan->moving_time}}</td>
                                    </tr>
                                    <tr>
                                        <th>Living Area (m2)</th>
                                        <td>{{$loan->apartment_size}}</td>
                                    </tr>
                                    <tr>
                                        <th>Housing Type</th>
                                        <td>{{$loan->accomodation_type}}</td>
                                    </tr>
                                    <tr>
                                        <th>Property Type</th>
                                        <td>{{$loan->apartment_type}}</td>
                                    </tr>
                                    <tr>
                                        <th>Is Summer Cottage?</th>
                                        <td>{{$loan->summer_cottage}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Education & Work</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Education Level</th>
                                    <td>{{$loan->education_level}}</td>
                                </tr>
                                <tr>
                                    <th>Employment Type</th>
                                    <td>{{$loan->employment_type}}</td>
                                </tr>
                                <tr>
                                    <th>business_id</th>
                                    <td>{{$loan->business_id}}</td>
                                </tr>
                                <tr>
                                    <th>Gross Monthly Income</th>
                                    <td>{{$loan->gross_monthly_income}}</td>
                                </tr>
                                <tr>
                                    <th>Net Monthly Income</th>
                                    <td>{{$loan->net_monthly_income}}</td>
                                </tr>
                                <tr>
                                    <th>other_income_per_month</th>
                                    <td>{{$loan->other_income_per_month}}</td>
                                </tr>
                                <tr>
                                    <th>source_of_other_income</th>
                                    <td>{{$loan->source_of_other_income}}</td>
                                </tr>
                                <tr>
                                    <th>Employer</th>
                                    <td>{{$loan->employer}}</td>
                                </tr>
                                <tr>
                                    <th>Employment Start Time Month</th>
                                    <td>{{$loan->employment_start_time}}</td>
                                </tr>
                                <tr>
                                    <th>employment_start_time_year</th>
                                    <td>{{$loan->employment_start_time_year}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Liabilities & Expenses</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>mortage_left</th>
                                    <td>{{$loan->mortage_left}}</td>
                                </tr>
                                <tr>
                                    <th>mortage_month</th>
                                    <td>{{$loan->mortage_month}}</td>
                                </tr>
                                <tr>
                                    <th>consumer_credit_left</th>
                                    <td>{{$loan->consumer_credit_left}}</td>
                                </tr>
                                <tr>
                                    <th>consumer_credit_month</th>
                                    <td>{{$loan->consumer_credit_month}}</td>
                                </tr>
                                <tr>
                                    <th>boat_loan_left</th>
                                    <td>{{$loan->boat_loan_left}}</td>
                                </tr>
                                <tr>
                                    <th>boat_loan_month</th>
                                    <td>{{$loan->boat_loan_month}}</td>
                                </tr>
                                <tr>
                                    <th>credit_card_left</th>
                                    <td>{{$loan->credit_card_left}}</td>
                                </tr>
                                <tr>
                                    <th>credit_card_month</th>
                                    <td>{{$loan->credit_card_month}}</td>
                                </tr>
                                <tr>
                                    <th>quick_loan_left</th>
                                    <td>{{$loan->quick_loan_left}}</td>
                                </tr>
                                <tr>
                                    <th>quick_loan_month</th>
                                    <td>{{$loan->quick_loan_month}}</td>
                                </tr>
                                <tr>
                                    <th>guarantees_left</th>
                                    <td>{{$loan->guarantees_left}}</td>
                                </tr>
                                <tr>
                                    <th>guarantees_month</th>
                                    <td>{{$loan->guarantees_month}}</td>
                                </tr>
                                <tr>
                                    <th>payabal_maintance_left</th>
                                    <td>{{$loan->payabal_maintance_left}}</td>
                                </tr>
                                <tr>
                                    <th>payabal_maintance_month</th>
                                    <td>{{$loan->payabal_maintance_month}}</td>
                                </tr>
                                <tr>
                                    <th>installment_paln_left</th>
                                    <td>{{$loan->installment_paln_left}}</td>
                                </tr>
                                <tr>
                                    <th>installment_paln_month</th>
                                    <td>{{$loan->installment_paln_month}}</td>
                                </tr>
                                <tr>
                                    <th>other_debts_left</th>
                                    <td>{{$loan->other_debts_left}}</td>
                                </tr>
                                <tr>
                                    <th>other_debts_month</th>
                                    <td>{{$loan->other_debts_month}}</td>
                                </tr>
                                <tr>
                                    <th>Credit Cards</th>
                                    <td>{{$loan->credit_cards}}</td>
                                </tr>
                                <tr>
                                    <th>Housing cost month</th>
                                    <td>{{$loan->housing_cost_month}}</td>
                                </tr>
                                <tr>
                                    <th>Other expenses month</th>
                                    <td>{{$loan->other_expenses_month}}</td>
                                </tr>
                                <tr>
                                    <th>Monthly income of spouse</th>
                                    <td>{{$loan->monthly_income_of_spouse}}</td>
                                </tr>
                                <tr>
                                    <th>Monthly cost of spouse</th>
                                    <td>{{$loan->monthly_cost_of_spouse}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Personal Information</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Customer ID</th>
                                    <td>{{$loan->customer->id}}</td>
                                </tr>
                                <tr>
                                    <th>Identity number(ssn)</th>
                                    <td>{{$loan->customer->ssn}}</td>
                                </tr>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{$loan->customer->first_name}}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{$loan->customer->last_name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$loan->customer->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$loan->customer->email}}</td>
                                </tr>
                                {{--<tr>
                                    <th>Gender</th>
                                    <td>{{$loan->customer->gender}}</td>
                                </tr>--}}
                                <tr>
                                    <th>Marital Status</th>
                                    <td>{{$loan->marital_status}}</td>
                                </tr>
                                <tr>
                                    <th>No of children</th>
                                    <td>{{$loan->no_of_children}}</td>
                                </tr>
                                <tr>
                                    <th>No of adults</th>
                                    <td>{{$loan->no_of_adults}}</td>
                                </tr>
                                <tr>
                                    <th>Citizenship</th>
                                    <td>{{$loan->citizenship}}</td>
                                </tr>
                                <tr>
                                    <th>Any politically influential?</th>
                                    <td>{{$loan->any_politically_influential}}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$loan->customer->created_at}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Joint Partner Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Is Joint partner</th>
                                    <td>{{$loan->joint_partner}}</td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td>{{$loan->joint_first_name}}</td>
                                </tr>
                                <tr>
                                    <th>Lastname</th>
                                    <td>{{$loan->joint_last_name}}</td>
                                </tr>
                                <tr>
                                    <th>Identity number (ssn)</th>
                                    <td>{{$loan->joint_ssn}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$loan->joint_email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$loan->joint_phone}}</td>
                                </tr>
                                <tr>
                                    <th>Net salary per month</th>
                                    <td>{{$loan->joint_net_salary_per_month}}</td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td>{{$loan->joint_education_level}}</td>
                                </tr>
                                <tr>
                                    <th>Employment type</th>
                                    <td>{{$loan->joint_employment_type}}</td>
                                </tr>
                                <tr>
                                    <th>Business id</th>
                                    <td>{{$loan->joint_business_id}}</td>
                                </tr>
                                <tr>
                                    <th>mortage_joint_left</th>
                                    <td>{{$loan->mortage_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>mortage_joint_month</th>
                                    <td>{{$loan->mortage_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>consumer_credit_joint_left</th>
                                    <td>{{$loan->consumer_credit_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>consumer_credit_joint_month</th>
                                    <td>{{$loan->consumer_credit_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>boat_loan_joint_left</th>
                                    <td>{{$loan->boat_loan_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>boat_loan_joint_month</th>
                                    <td>{{$loan->boat_loan_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>credit_card_joint_left</th>
                                    <td>{{$loan->credit_card_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>credit_card_joint_month</th>
                                    <td>{{$loan->credit_card_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>quick_loan_joint_left</th>
                                    <td>{{$loan->quick_loan_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>quick_loan_joint_month</th>
                                    <td>{{$loan->quick_loan_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>guarantees_joint_left</th>
                                    <td>{{$loan->guarantees_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>guarantees_joint_month</th>
                                    <td>{{$loan->guarantees_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>payabal_maintance_joint_left</th>
                                    <td>{{$loan->payabal_maintance_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>payabal_maintance_joint_month</th>
                                    <td>{{$loan->payabal_maintance_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>installment_paln_joint_left</th>
                                    <td>{{$loan->installment_paln_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>installment_paln_joint_month</th>
                                    <td>{{$loan->installment_paln_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>other_debts_joint_left</th>
                                    <td>{{$loan->other_debts_joint_left}}</td>
                                </tr>
                                <tr>
                                    <th>other_debts_joint_month</th>
                                    <td>{{$loan->other_debts_joint_month}}</td>
                                </tr>
                                <tr>
                                    <th>Joint venture approval?</th>
                                    <td>{{$loan->joint_venture_approval}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Bank Details</h3>
                        </div>
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Bank A/C</th>
                                    <td>{{$loan->bank_account}}</td>
                                </tr>
                                <tr>
                                    <th>BIC</th>
                                    <td>{{$loan->bic}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
@endsection
