@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard 4
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="info-box">
                    <div id="linechart" class="pull-left" >1,4,3,7,6,4,8,9,6,8,12</div>
                    <div class="info-box-content text-right">
                        <span>New Users</span><br>
                        <span>
                            <i class="ion-ios-arrow-up text-success"></i>
                            <span class="font-size-18 ml-1">113</span>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="info-box">
                    <div id="barchart" class="pull-left" >1,4,3,7,6,4,8,9,6,8,12</div>
                    <div class="info-box-content text-right">
                        <span>Monthly Sale</span><br>
                        <span>
                            <i class="ion-ios-arrow-up text-success"></i>
                            <span class="font-size-18 ml-1">%80</span>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-none d-lg-block">
                <div class="info-box">
                    <div id="discretechart" class="pull-left" >1,4,3,7,6,4,8,9,6,8,12</div>
                    <div class="info-box-content text-right">
                        <span>Impressions</span><br>
                        <span>
                            <i class="ion-ios-arrow-up text-success"></i>
                            <span class="font-size-18 ml-1">%80</span>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-8 connectedSortable">
                <!-- AREA CHART -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sales Analytics</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <div class="pad">
                                    <div class="chart" id="revenue-chart" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-lg-3 col-md-4">
                                <div class="row pad box-pane-right m-0 bg-blue">
                                    <div class="col-4 col-sm-12 description-block margin-bottom p-0">
                                        <p class="mb-0">Traffic</p>
                                        <div class="font-size-20 mb-5">324,222</div>
                                        <div class="font-size-18 text-success">
                                            <i class="fa fa-arrow-up pr-5"></i><span>+15%</span>
                                        </div>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="col-4 col-sm-12 description-block margin-bottom p-0">
                                        <p class="mb-0">Orders</p>
                                        <div class="font-size-20 mb-5">123,432</div>
                                        <div class="font-size-18 text-success">
                                            <i class="fa fa-arrow-up pr-5"></i><span>+4%</span>
                                        </div>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="col-4 col-sm-12 description-block p-0">
                                        <p class="mb-0">Revenue</p>
                                        <div class="font-size-20 mb-5">324,222</div>
                                        <div class="font-size-18 text-danger">
                                            <i class="fa fa-arrow-down pr-5"></i><span>-5%</span>
                                        </div>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-xl-4 connectedSortable">	
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently Products</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box" id="products-list">
                            <li class="item">
                                <div class="product-img">
                                    <img src="images/default-50x50.gif" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">iphone 7plus
                                        <span class="label label-warning pull-right">$300</span></a>
                                    <span class="product-description">
                                        12MP Wide-angle and telephoto cameras.
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="images/default-50x50.gif" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Apple Tv
                                        <span class="label label-info pull-right">$400</span></a>
                                    <span class="product-description">
                                        Library | For You | Browse | Radio
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="images/default-50x50.gif" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">iphone X
                                        <span class="label label-info pull-right">$900</span></a>
                                    <span class="product-description">
                                        Library | For You | Browse | Radio
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="images/default-50x50.gif" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">MacBook Air<span
                                            class="label label-danger pull-right">$450</span></a>
                                    <span class="product-description">
                                        Make big things happen. All day long.
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="images/default-50x50.gif" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">iPad Pro
                                        <span class="label label-success pull-right">$289</span></a>
                                    <span class="product-description">
                                        Anything you can do, you can do better.
                                    </span>
                                </div>
                            </li>
                            <!-- /.item -->
                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.box-footer -->
                </div>           
            </div>        
            <!-- /.col -->        
        </div>        
        <!-- /.row -->
        <div class="row">

            <div class="col-xl-4 connectedSortable">
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">New User</h3>

                        <div class="box-tools pull-right">
                            <span class="label bg-aqua">8 New User</span>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="users-list clearfix">
                            <li>
                                <img src="images/user1-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Arijit Sinh</a>
                                <span class="users-list-date">Today</span>
                            </li>
                            <li>
                                <img src="images/user8-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Sonu Nigam</a>
                                <span class="users-list-date">Yesterday</span>
                            </li>
                            <li>
                                <img src="images/user7-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Pavan kumar</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="images/user6-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">John Doe</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="images/user1-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Alexander</a>
                                <span class="users-list-date">13 Jan</span>
                            </li>
                            <li>
                                <img src="images/user5-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Angela</a>
                                <span class="users-list-date">14 Jan</span>
                            </li>
                            <li>
                                <img src="images/user4-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Maical</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                            <li>
                                <img src="images/user3-128x128.jpg" alt="User Image">
                                <a class="users-list-name" href="#">Juliya</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                        </ul>
                        <!-- /.users-list -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript:void(0)" class="uppercase">View All Users</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div>        
            <div class="col-xl-8 connectedSortable">
                <!-- MAP & BOX PANE -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Our Visitors</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <div class="pad">
                                    <!-- Map will be created here -->
                                    <div id="visitfromworld" style="height: 325px;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-lg-3 col-md-4">
                                <div class="row pad box-pane-right bg-blue m-0">
                                    <div class="col-4 col-sm-12 description-block margin-bottom p-0">
                                        <div class="sparkbar pad" data-color="#fff">80,60,95,70,75,80,50</div>
                                        <h5 class="description-header">7458</h5>
                                        <span class="description-text">Visits</span>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="col-4 col-sm-12 description-block margin-bottom p-0">
                                        <div class="sparkbar pad" data-color="#fff">70,40,85,70,61,93,63</div>
                                        <h5 class="description-header">56%</h5>
                                        <span class="description-text">Referrals</span>
                                    </div>
                                    <!-- /.description-block -->
                                    <div class="col-4 col-sm-12 description-block p-0">
                                        <div class="sparkbar pad" data-color="#fff">80,55,91,70,81,43,67</div>
                                        <h5 class="description-header">85%</h5>
                                        <span class="description-text">Organic</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->          
            </div>		  
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xl-6">
                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-envelope"></i>

                        <h3 class="box-title">Quick Email</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div>
                                <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="box-footer clearfix">
                        <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Orders</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-responsive no-margin">
                                <thead>
                                    <tr>
                                        <th>Order No</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                        <th>Popularity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">ODN84952</a></td>
                                        <td>Iphone 6s</td>
                                        <td><span class="label bg-purple">Shipped</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#7460ee" data-height="20">60,50,90,-40,91,-53,83</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">ODN84845</a></td>
                                        <td>Apple TV</td>
                                        <td><span class="label bg-yellow">Pending</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">40,80,-90,80,61,-73,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">ODN84982</a></td>
                                        <td>Samsung TV</td>
                                        <td><span class="label bg-green">Delivered</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#41b613" data-height="20">60,50,90,-40,91,-53,83</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">ODN85452</a></td>
                                        <td>Intex Smart Watch</td>
                                        <td><span class="label bg-blue">Processing</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#389af0" data-height="20">40,80,-90,80,61,-73,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">ODN94992</a></td>
                                        <td>Onida AC</td>
                                        <td><span class="label bg-yellow">Pending</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">40,80,-90,80,61,-73,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">ODN98952</a></td>
                                        <td>iPhone 7 Plus</td>
                                        <td><span class="label bg-green">Delivered</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#41b613" data-height="20">60,50,90,-40,91,-53,83</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">ODN88989</a></td>
                                        <td>Samsung LED</td>
                                        <td><span class="label bg-purple">Shipped</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#7460ee" data-height="20">60,50,90,-40,91,-53,83</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info pull-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">View All Orders</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
@endsection
