<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>School Buses</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL::route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">School Buses List</li>
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
                                    <th>School Name</th>
                                    <th>School Number</th>
                                    <th>Bus</th>
                                    <th>Driver Name</th>
                                    <th>Driver Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>				
                            <tbody>
                                <?php $__currentLoopData = $school; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $schoolRow->buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($schoolRow->schoolName); ?></td>
                                    <td><?php echo e($schoolRow->schoolNumber); ?></td>
                                    <td><?php echo e($busRow->bus[0]->busNumber); ?></td>
                                    <td><?php echo e($busRow->bus[0]->driverName); ?></td>
                                    <td><?php echo e($busRow->bus[0]->driverNumber); ?></td>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>School Name</th>
                                    <th>School Number</th>
                                    <th>Bus</th>
                                    <th>Driver Name</th>
                                    <th>Driver Number</th>
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
<script src="<?php echo e(asset('admin/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<!-- This is data table -->
<script src="<?php echo e(asset('admin/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')); ?>"></script>
<!-- bonitoadmin for Data Table -->
<script src="<?php echo e(asset('admin/js/pages/data-table.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>