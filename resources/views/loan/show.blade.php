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
                                    <th>Status</th>
                                    <td>{{$loan->status}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$loan->address}}</td>
                                </tr>
                                <tr>
                                    <th>Bank A/C</th>
                                    <td>{{$loan->bank_account}}</td>
                                </tr>
                                <tr>
                                    <th>PO BOX</th>
                                    <td>{{$loan->pobox}}</td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td>{{$loan->occupation}}</td>
                                </tr>
                                <tr>
                                    <th>Employer</th>
                                    <td>{{$loan->employer}}</td>
                                </tr>
                                <tr>
                                    <th>Employment Start Time</th>
                                    <td>{{$loan->employment_start_time}}</td>
                                </tr>
                                <tr>
                                    <th>Marital Status</th>
                                    <td>{{$loan->marital_status}}</td>
                                </tr>
                                <tr>
                                    <th>House Hold People</th>
                                    <td>{{$loan->house_hold_people}}</td>
                                </tr>
                                <tr>
                                    <th>Move To Current Address</th>
                                    <td>{{$loan->move_to_current_address}}</td>
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
                                    <th>Living Expenses</th>
                                    <td>{{$loan->living_expenses}}</td>
                                </tr>
                                <tr>
                                    <th>Other Loan Expenses</th>
                                    <td>{{$loan->other_loan_expenses}}</td>
                                </tr>
                                <tr>
                                    <th>PO BOX</th>
                                    <td>{{$loan->pobox}}</td>
                                </tr>
                                <tr>
                                    <th>Monthly Payment Other Loan</th>
                                    <td>{{$loan->monthly_payment_other_loan}}</td>
                                </tr>
                                <tr>
                                    <th>Apartment Size</th>
                                    <td>{{$loan->apartment_size}}</td>
                                </tr>
                                <tr>
                                    <th>Accomodation Type</th>
                                    <td>{{$loan->accomodation_type}}</td>
                                </tr>
                                <tr>
                                    <th>Education Level</th>
                                    <td>{{$loan->education_level}}</td>
                                </tr>
                                <tr>
                                    <th>Employment Type</th>
                                    <td>{{$loan->employment_type}}</td>
                                </tr>
                                <tr>
                                    <th>Apartment Type</th>
                                    <td>{{$loan->apartment_type}}</td>
                                </tr>
                                <tr>
                                    <th>Summer Cottage</th>
                                    <td>{{$loan->summer_cottage}}</td>
                                </tr>
                                <tr>
                                    <th>Credit Cards</th>
                                    <td>{{$loan->credit_cards}}</td>
                                </tr>
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
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Customer Details</h3>
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
                                <tr>
                                    <th>Gender</th>
                                    <td>{{$loan->customer->gender}}</td>
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
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
@endsection
