@extends('layouts.admin')

@section('css')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>it all starts here</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->

                <div class="box-body">

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>{{$total_loan}}</h3>

                                <p>Loans</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-social-euro"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{$approved_loan}}</h3>

                                <p>Approved Loans</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>{{$pending_loan}}</h3>

                                <p>Pending Loans</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{$total_customers}}</h3>

                                <p>Customers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>

                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.box-body -->

            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
@endsection
