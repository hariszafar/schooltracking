@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Bus</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Add Bus</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        @include('admin.layouts.messageView')
                        <form novalidate id="busForm" method="post" action="{{ URL::route('save-bus') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <h5>Bus Number <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="busNumber" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Bus Registration Number</h5>
                                <div class="controls">
                                    <input type="text" name="regNumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Bus Capacity</h5>
                                <div class="controls">
                                    <input type="text" name="capacity" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Bus Route</h5>
                                <div class="controls">
                                    <input type="text" name="route" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Driver Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="driverName" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Driver Number <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="driverNumber" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Driver Address</h5>
                                <div class="controls">
                                    <textarea name="driverAddress" id="textarea" class="form-control" placeholder="Driver Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Driver CNIC <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="driverCnic" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
@endsection
