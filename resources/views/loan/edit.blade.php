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
                                    <th>Marital Status</th>
                                    <td>
                                        <select name="marital_status" class="form-control">
                                            <option value="Married" @if($loan->marital_status == "Married")selected="selected"@endif>Married</option>
                                            <option value="Cohabitation" @if($loan->marital_status == "Cohabitation")selected="selected"@endif>Cohabitation</option>
                                            <option value="Unmarried" @if($loan->marital_status == "Unmarried")selected="selected"@endif>Unmarried</option>
                                            <option value="Divorced" @if($loan->marital_status == "Divorced")selected="selected"@endif>Divorced</option>
                                            <option value="Widow" @if($loan->marital_status == "Widow")selected="selected"@endif>Widow</option>
                                        </select>
                                    </td>
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
                                    <td>
                                        <select name="accomodation_type" class="form-control">
                                            <option value=""Yes @if($loan->accomodation_type == "Yes")selected="selected"@endif>Yes</option>
                                            <option value="No" @if($loan->accomodation_type == "No")selected="selected"@endif>No</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Education Level</th>
                                    <td>
                                        <select name="education_level" class="form-control">
                                            <option value="Primary School" @if($loan->education_level == "Primary School")@endif>Primary School</option>
                                            <option value="High School" @if($loan->education_level == "High School")@endif>High School</option>
                                            <option value="Vocational School" @if($loan->education_level == "Vocational School")@endif>Vocational School</option>
                                            <option value="Bachelors Degree" @if($loan->education_level == "Bachelors School")@endif>Bachelors Degree</option>
                                            <option value="Master Degree" @if($loan->education_level == "Master School")@endif>Master Degree</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Employment Type</th>
                                    <td>
                                        <select name="employment_type" class="form-control">
                                            <option value="Forced" @if($loan->employment_type == "Forced")selected="selected"@endif>Forced</option>
                                            <option value="Temporary" @if($loan->employment_type == "Temporary")selected="selected"@endif>Temporary</option>
                                            <option value="Project Worker" @if($loan->employment_type == "Project Worker")selected="selected"@endif>Project Worker</option>
                                            <option value="Entrepreneur" @if($loan->employment_type == "Entrepreneur")selected="selected"@endif>Entrepreneur</option>
                                            <option value="Unemployed" @if($loan->employment_type == "Unemployed")selected="selected"@endif>Unemployed</option>
                                            <option value="Pensioner" @if($loan->employment_type == "Pensioner")selected="selected"@endif>Pensioner</option>
                                            <option value="Student" @if($loan->employment_type == "Student")selected="selected"@endif>Student</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Apartment Type</th>
                                    <td>

                                        <select name="apartment_type" class="form-control">
                                            <option value="Own" @if($loan->apartment_type == "Own")selected="selected"@endif>Own</option>
                                            <option value="Asumisoikeus" @if($loan->apartment_type == "Asumisoikeus")selected="selected"@endif>Asumisoikeus</option>
                                            <option value="Fractional Ownership" @if($loan->apartment_type == "Fractional Ownership")selected="selected"@endif>Fractional Ownership</option>
                                            <option value="Rental" @if($loan->apartment_type == "Rental")selected="selected"@endif>Rental</option>
                                            <option value="At parents" @if($loan->apartment_type == "At parents")selected="selected"@endif>At parents</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Summer Cottage</th>
                                    <td><input type="text" class="form-control" name="summer_cottage" value="{{$loan->summer_cottage}}"/></td>
                                </tr>
                                <tr>
                                    <th>Credit Cards</th>
                                    <td>
                                        <select name="credit_cards" class="form-control">
                                            <option value=""Yes @if($loan->credit_cards == "Yes")selected="selected"@endif>Yes</option>
                                            <option value="No" @if($loan->credit_cards == "No")selected="selected"@endif>No</option>
                                        </select>
                                    </td>
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
