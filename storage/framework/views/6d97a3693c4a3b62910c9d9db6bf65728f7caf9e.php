<?php $__env->startSection('content'); ?>
<div class="register-box">
    <div class="register-logo">
        <a href="../../index.html"><b>School</b> Tracking</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="POST" action="<?php echo e(route('register')); ?>" class="form-element">
            <?php echo e(csrf_field()); ?>

            <div class="form-group has-feedback">
                <input id="name" type="text" class="form-control" placeholder="Full name" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                <span class="ion ion-person form-control-feedback "></span>
                <?php if($errors->has('name')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required>
                <span class="ion ion-email form-control-feedback "></span>
                <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="ion ion-locked form-control-feedback "></span>
                <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
            <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                <span class="ion ion-log-in form-control-feedback "></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN UP</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="margin-top-20 text-center">
            <p>Already have an account?<a href="<?php echo e(route('login')); ?>" class="text-info m-l-5"> Sign In</a></p>
        </div>

    </div>
    <!-- /.form-box -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_pages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>