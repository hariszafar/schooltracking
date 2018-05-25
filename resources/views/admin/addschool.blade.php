@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add School</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Add School</li>
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
                        <form novalidate id="busForm" method="post" action="{{ URL::route('save-school') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <h5>School Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="schoolName" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>School Address</h5>
                                <div class="controls">
                                    <textarea name="schoolAddress" id="textarea" class="form-control" placeholder="School Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>School Number</h5>
                                <div class="controls">
                                    <input type="text" name="schoolNumber" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>School Principle <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="userId" id="select" required class="form-control">
                                        <option value="">Select School Principle</option>
                                        @foreach ($users as $usersRow)
                                        <option value="{{$usersRow->id}}">{{$usersRow->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Assign Buses <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="busCount" class="form-control" required data-validation-required-message="This field is required">
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
