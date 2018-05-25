<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Student</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(URL::route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Add Student</li>
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
                        <form novalidate id="busForm" method="post" action="<?php echo e(URL::route('save-student')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <h5>Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="studentName" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Address</h5>
                                <div class="controls">
                                    <textarea name="studentAddress" id="textarea" class="form-control" placeholder="Student Address"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Contact Number <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="studentNumber" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Class</h5>
                                <div class="controls">
                                    <input type="text" name="studentClass" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Section</h5>
                                <div class="controls">
                                    <input type="text" name="studentSection" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Services</h5>
                                <div class="controls">
                                    <select name="services" id="select" class="form-control">
                                        <option value="1">One way</option>
                                        <option value="2">Two way</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Select Bus <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="busId" id="select" class="form-control" required class="form-control">
                                        <option value="">Assign Bus To Student</option>
                                        <?php $__currentLoopData = $buses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $busesRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($busesRow->busId); ?>"><?php echo e($busesRow->busNumber); ?> (Capacity <?php echo e($busesRow->capacity); ?>)</option>
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