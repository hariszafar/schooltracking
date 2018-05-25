<?php $__env->startSection('content'); ?>
<?php echo e(csrf_field()); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Buses</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL::route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Buses List</li>
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
                                    <th>Driver Name</th>
                                    <th>Bus Number</th>
                                    <th>Capacity</th>
                                    <th>Route</th>
                                    <th>Driver Number</th>
                                    <th>Driver CNIC</th>
                                    <th>Action</th>
                                </tr>
                            </thead>				
                            <tbody>
                                <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="bus_<?php echo e($busRow->busId); ?>">
                                    <td><?php echo e($busRow->driverName); ?></td>
                                    <td><?php echo e($busRow->busNumber); ?></td>
                                    <td><?php echo e($busRow->capacity); ?></td>
                                    <td><?php echo e($busRow->route); ?></td>
                                    <td><?php echo e($busRow->driverNumber); ?></td>
                                    <td><?php echo e($busRow->driverCnic); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a onclick="deleteBus(<?php echo e($busRow->busId); ?>)" class="dropdown-item" href="javascript:void(0)">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Driver Name</th>
                                    <th>Bus Number</th>
                                    <th>Capacity</th>
                                    <th>Route</th>
                                    <th>Driver Number</th>
                                    <th>Driver CNIC</th>
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