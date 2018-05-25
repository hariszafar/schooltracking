<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo e(asset('admin/images/favicon.ico')); ?>">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(env('APP_NAME')); ?></title>

        <!-- Bootstrap 4.0-->
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')); ?>">

        <!-- Bootstrap 4.0-->
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css')); ?>">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor_components/font-awesome/css/font-awesome.min.css')); ?>">

        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor_components/Ionicons/css/ionicons.min.css')); ?>">

        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/master_style.css')); ?>">

        <!-- bonitoadmin Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/skins/_all-skins.css')); ?>">	

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    </head>
    <body class="hold-transition login-page">
        <?php echo $__env->yieldContent('content'); ?>
        <!-- /.login-box -->
        <!-- jQuery 3 -->
        <script src="<?php echo e(asset('admin/assets/vendor_components/jquery/dist/jquery.min.js')); ?>"></script>

        <!-- popper -->
        <script src="<?php echo e(asset('admin/assets/vendor_components/popper/dist/popper.min.js')); ?>"></script>

        <!-- Bootstrap 4.0-->
        <script src="<?php echo e(asset('admin/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    </body>
</html>