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
                            <h3 class="box-title">Customer Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Customer ID</th>
                                    <td>{{$customer->id}}</td>
                                </tr>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{$customer->first_name}}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{$customer->last_name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$customer->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$customer->email}}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{$customer->gender}}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$customer->created_at}}</td>
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
