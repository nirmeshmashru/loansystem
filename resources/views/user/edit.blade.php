@extends('layouts.admin')

@section('css')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Admin Users Details
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Edit Admin Users Details</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            {{ Form::open(['method' => 'PUT', 'route' => ['user.update', $user->id]]) }}
                                <table class="table table-condensed">
                                <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" class="form-control" name="name" value="{{$user->name}}"/></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><input type="email" class="form-control" name="email" value="{{$user->email}}"/></td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td><input type="password" class="form-control" name="password"/></td>
                                </tr>
                                <td colspan="2" class="text-center">
                                    {!! csrf_field() !!}
                                    <input type="submit" class="btn btn-success" name="save" value="save"/>
                                    <a href="{{Route('user.index')}}" class="btn btn-default">Cancel</a>
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
