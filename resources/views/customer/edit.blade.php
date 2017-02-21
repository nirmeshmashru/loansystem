@extends('layouts.admin')

@section('css')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Customer Details
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit Customer Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            {{ Form::open(['method' => 'PUT', 'route' => ['customer.update', $customer->id]]) }}
                                <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>First Name</th>
                                    <td><input type="text" class="form-control" name="first_name" value="{{$customer->first_name}}"/></td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td><input type="text" class="form-control" name="last_name" value="{{$customer->last_name}}"/></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td><input type="text" class="form-control" name="phone" value="{{$customer->phone}}"/></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><input type="email" class="form-control" name="email" value="{{$customer->email}}"/></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>
                                        <select class="form-control" name="gender">
                                            <option value="Male" @if($customer->gender == "Male")selected="selected"@endif>Male</option>
                                            <option value="Female" @if($customer->gender == "Female")selected="selected"@endif>Female</option>
                                        </select>
                                    </td>
                                </tr>
                                <td colspan="2" class="text-center">
                                    {!! csrf_field() !!}
                                    <input type="submit" class="btn btn-success" name="save" value="save"/>
                                    <a href="{{Route('customer.index')}}" class="btn btn-default">Cancel</a>
                                </td>
                                </tbody>
                            </table>
                            {{ Form::close() }}
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
