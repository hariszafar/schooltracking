<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Assign Bus</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL::route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Assign Bus</li>
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
                        <?php echo $__env->make('admin.layouts.messageView', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <form novalidate id="busForm" method="post" action="<?php echo e(URL::route('assign-bus')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <h5>School Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="schoolId" id="select" required class="form-control">
                                        <option value="">Select School</option>
                                        <?php $__currentLoopData = $school; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($schoolRow->schoolId); ?>"><?php echo e($schoolRow->schoolName); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Bus <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="busId" id="select" required class="form-control">
                                        <option value="">Select Bus</option>
                                        <?php $__currentLoopData = $bus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($busRow->busId); ?>"><?php echo e($busRow->busNumber); ?> (Capcity <?php echo e($busRow->capacity); ?>)</option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>