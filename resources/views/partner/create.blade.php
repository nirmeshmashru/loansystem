@extends('layouts.admin')

@section('css')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Partner Details
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">New Partner Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            {{ Form::open(['method' => 'POST', 'route' => ['partner.store']]) }}
                                <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" class="form-control" name="name"/></td>
                                </tr>
                                <tr>
                                    <th>API Key</th>
                                    <td><input type="text" class="form-control" name="apikey"/></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <select class="form-control" name="status">
                                            <option value="Active">Active</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Disabled">Disabled</option>
                                        </select>
                                    </td>
                                </tr>
                                <td colspan="2" class="text-center">
                                    {!! csrf_field() !!}
                                    <input type="submit" class="btn btn-success" name="save" value="save"/>
                                    <a href="{{Route('partner.index')}}" class="btn btn-default">Cancel</a>
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
