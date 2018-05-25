@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Students</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Student List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student Number</th>
                                    <th>Student Class</th>
                                    <th>Student Section</th>
                                    <th>Services</th>
                                    <th>Action</th>
                                </tr>
                            </thead>				
                            <tbody>
                                @foreach ($students as $studentsRow)
                                <tr>
                                    <td>{{$studentsRow->studentName}}</td>
                                    <td>{{$studentsRow->studentNumber}}</td>
                                    <td>{{$studentsRow->studentClass}}</td>
                                    <td>{{$studentsRow->studentSection}}</td>
                                    <td>{{$studentsRow->services == 1 ? 'One way' : 'Two way'}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student Number</th>
                                    <th>Student Class</th>
                                    <th>Student Section</th>
                                    <th>Services</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->     
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- DataTables -->
<script src="{{ asset('admin/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- This is data table -->
<script src="{{ asset('admin/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js') }}"></script>
<!-- bonitoadmin for Data Table -->
<script src="{{ asset('admin/js/pages/data-table.js') }}"></script>
@endsection
