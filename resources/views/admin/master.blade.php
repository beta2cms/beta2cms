
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <link href="{{URL::asset('vendor/bootstrap-3.3.5/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/bootstrap-3.3.5/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/font-awesome-4.4.0/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/sb-admin.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper" class="@yield('class')">

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Admin <small>@yield('title')</small>
                    </h1>

                </div>
            </div>
            <!-- /.row -->


            @yield('content')

            {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<div class="alert alert-info alert-dismissable">--}}
                        {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                        {{--<i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- /.row -->

            {{--<div class="row">--}}

            {{--</div>--}}
            <!-- /.row -->

            {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div id="morris-area-chart"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- /.row -->

            {{--<div class="row">--}}
                {{--<div class="col-lg-4">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div id="morris-donut-chart"></div>--}}
                            {{--<div class="text-right">--}}
                                {{--<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="list-group">--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">just now</span>--}}
                                    {{--<i class="fa fa-fw fa-calendar"></i> Calendar updated--}}
                                {{--</a>--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">4 minutes ago</span>--}}
                                    {{--<i class="fa fa-fw fa-comment"></i> Commented on a post--}}
                                {{--</a>--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">23 minutes ago</span>--}}
                                    {{--<i class="fa fa-fw fa-truck"></i> Order 392 shipped--}}
                                {{--</a>--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">46 minutes ago</span>--}}
                                    {{--<i class="fa fa-fw fa-money"></i> Invoice 653 has been paid--}}
                                {{--</a>--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">1 hour ago</span>--}}
                                    {{--<i class="fa fa-fw fa-user"></i> A new user has been added--}}
                                {{--</a>--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">2 hours ago</span>--}}
                                    {{--<i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"--}}
                                {{--</a>--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">yesterday</span>--}}
                                    {{--<i class="fa fa-fw fa-globe"></i> Saved the world--}}
                                {{--</a>--}}
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<span class="badge">two days ago</span>--}}
                                    {{--<i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="text-right">--}}
                                {{--<a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4">--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">--}}
                            {{--<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>--}}
                        {{--</div>--}}
                        {{--<div class="panel-body">--}}
                           {{--table>--}}
                            {{--</div>--}}
                            {{--<div class="text-right">--}}
                                {{--<a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script src="{{URL::asset('vendor/jQuery/jquery-2.1.4.min.js')}}"></script>
<script src="{{URL::asset('vendor/bootstrap-3.3.5/js/bootstrap.min.js')}}"></script>

</body>

</html>
