<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('admin/images/favicon.ico') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- bootstrap 4.0 -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/bootstrap/dist/css/bootstrap.css') }}">

        <!-- Bootstrap 4.0-->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css') }}">

        <!-- font awesome -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/font-awesome/css/font-awesome.css') }}">

        <!-- ionicons -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/Ionicons/css/ionicons.css') }}">

        <!-- theme style -->
        <link rel="stylesheet" href="{{ asset('admin/css/master_style.css') }}">

        <!-- mpt_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('admin/css/skins/_all-skins.css') }}">

        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/jvectormap/jquery-jvectormap.css') }}">

        <!-- daterange picker -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css') }}">

        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') }}">

        <!-- Morris charts -->
        <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/morris.js/morris.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- jQuery 3 -->
        <script src="{{ asset('admin/assets/vendor_components/jquery/dist/jquery.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('admin/assets/vendor_components/jquery-ui/jquery-ui.js') }}"></script>
        <!-- custom script -->
        <script>
        var BASE_URL = '{{ env("APP_URL") }}';
        </script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="{{ URL::route('dashboard') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>ST</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>School Tracking</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('admin/images/user2-160x160.jpg') }}" class="user-image rounded" alt="User Image">
                                </a>
                                <ul class="dropdown-menu scale-up">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ asset('admin/images/user2-160x160.jpg') }}" class="rounded float-left" alt="User Image">
                                        <p>{{$userName}}</p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-block btn-primary">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" class="btn btn-block btn-danger">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image float-left">
                            <img src="{{ asset('admin/images/user2-160x160.jpg') }}" class="rounded" alt="User Image">
                        </div>
                        <div class="info float-left">
                            <p>{{$userName}}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                        <!-- search form -->
                        <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        @if ($userRoles == 1)
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>User</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::route('users') }}"><i class="fa fa-circle-o"></i> Users</a></li>
                                <li><a href="{{ URL::route('add-user') }}"><i class="fa fa-circle-o"></i> Add User</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>School</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::route('school') }}"><i class="fa fa-circle-o"></i> Schools</a></li>
                                <li><a href="{{ URL::route('add-school') }}"><i class="fa fa-circle-o"></i> Add School</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Bus</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::route('buses') }}"><i class="fa fa-circle-o"></i> Buses</a></li>
                                @if ($busCount > 0)
                                <li><a href="{{ URL::route('add-bus') }}"><i class="fa fa-circle-o"></i> Add Bus</a></li>
                                @endif
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Student</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::route('students') }}"><i class="fa fa-circle-o"></i> Students List</a></li>
                                <li><a href="{{ URL::route('add-student') }}"><i class="fa fa-circle-o"></i> Add Student</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right d-none d-sm-inline-block">
                    <b>Version</b> 1.2
                </div>Copyright &copy; 2017 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
            </footer>

        </div>
        <!-- ./wrapper -->

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>

        <!-- popper -->
        <script src="{{ asset('admin/assets/vendor_components/popper/dist/popper.min.js') }}"></script>

        <!-- Bootstrap v4.0.0-beta-->
        <script src="{{ asset('admin/assets/vendor_components/bootstrap/dist/js/bootstrap.js') }}"></script>	

        <!-- Sparkline -->
        <script src="{{ asset('admin/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js') }}"></script>

        <!-- jvectormap -->
        <script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>	
        <script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- daterangepicker -->
        <script src="{{ asset('admin/assets/vendor_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

        <!-- datepicker -->
        <script src="{{ asset('admin/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>

        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('admin/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>

        <!-- Slimscroll -->
        <script src="{{ asset('admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

        <!-- FastClick -->
        <script src="{{ asset('admin/assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>

        <!-- Morris.js charts -->
        <script src="{{ asset('admin/assets/vendor_components/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor_components/morris.js/morris.min.js') }}"></script>

        <!-- bonito_admin App -->
        <script src="{{ asset('admin/js/template.js') }}"></script>

        <!-- bonito_admin dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('admin/js/pages/dashboard4.js') }}"></script>

        <!-- bonito_admin for demo purposes -->
        <script src="{{ asset('admin/js/demo.js') }}"></script>	
    </body>
</html>
