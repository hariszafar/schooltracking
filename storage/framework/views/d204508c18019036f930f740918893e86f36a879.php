<?php if(Session::has('message') || Session::has('error')): ?>
<div class="row m-0">
    <div class="col-md-12">
        <?php if(Session::has('message')): ?>
        <div class="a_alert alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <em> <?php echo session('message'); ?></em>
        </div>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
        <div class="a_alert alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <em> <?php echo session('error'); ?></em>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
<?php if(isset($errors) && count($errors) > 0): ?>
<div style="width: 50%; margin-left: 1%; margin-top: 1%;" class="a_alert alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>