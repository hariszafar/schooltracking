<?php $__env->startSection('content'); ?>
<div class="login-box">
    <div class="login-logo">
        <a href="../../index.html"><b>School</b> Tracking</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="<?php echo e(route('login')); ?>" class="form-element">
            <?php echo e(csrf_field()); ?>

            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                <span class="ion ion-email form-control-feedback"></span>
                <?php if($errors->has('email')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="ion ion-locked form-control-feedback"></span>
                <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="checkbox">
                        <input type="checkbox" id="basic_checkbox_1" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label for="basic_checkbox_1">Remember Me</label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                    <div class="fog-pwd">
                        <a href="<?php echo e(route('password.request')); ?>"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="margin-top-30 text-center">
            <p>Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-info m-l-5">Sign Up</a></p>
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth_pages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>