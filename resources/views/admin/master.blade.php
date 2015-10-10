
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>beta2cmd - Dashboard</title>

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

<div id="wrapper" class="{{isset($wrapper) ? $wrapper : ''}}">

    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        @yield('title') <small>@yield('subheading')</small>
                    </h1>
                    <!-- Breadcrumbs -->
                    <!-- Flash -->
                    {{--@include('flash::message')--}}
                </div>
            </div>
            <!-- /.row -->

            @if(isset($nav)? $nav: true)
                @include('admin.partials.nav')
            @endif

            <div class="row">
                @yield('content')
            </div>

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
