 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin.index')}}">beta2cms</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    @include('admin.partials.massage', [
                        'route' => null,
                        'image' => 'http://placehold.it/50x50',
                        'name' => 'John Smith',
                        'time' => 'Yesterday at 4:32 PM',
                        'message' => 'Lorem ipsum dolor sit amet, consectetur...'
                        ])

                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">

                    {{--@include('admin.partials.alert' ,  [--}}
                    {{--'route' => null,--}}
                    {{--'name' => 'Alert Name',--}}
                    {{--'level' => 'success',--}}
                    {{--'massage' => 'Alert Badge'--}}
                    {{--])--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>--}}
                    {{--</li>--}}
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{auth()->user()->name}} <b class="caret"></b></a>
                <ul class="dropdown-menu">

                    @include('admin.partials.side-item' ,  [
                        'route' => '#',
                        'icon' => 'user',
                        'name' => 'Profile',
                    ])

                    @include('admin.partials.side-item' ,  [
                       'route' => '#',
                       'icon' => 'envelope',
                       'name' => 'Inbox',
                   ])

                    @include('admin.partials.side-item' ,  [
                       'route' => '#',
                       'icon' => 'gear',
                       'name' => 'Setting',
                   ])

                    <li class="divider"></li>

                    @include('admin.partials.side-item' ,  [
                       'route' => route('admin.logout'),
                       'icon' => 'power-off',
                       'name' => 'Log Out',
                   ])
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                {{--@include('admin.partials.side-item' ,  [--}}
                    {{--'route' => '#',--}}
                    {{--'icon' => 'dashboard',--}}
                    {{--'name' => 'Dashboard',--}}
                    {{--'items' => [--}}
                        {{--[--}}
                            {{--'route' => 'null',--}}
                            {{--'name' => 'Dropdown Item'--}}
                        {{--],--}}
                        {{--[--}}
                            {{--'route' => 'null',--}}
                            {{--'name' => 'Dropdown Item'--}}
                        {{--],--}}
                    {{--]--}}
                {{--])--}}


                @include('admin.partials.side-item' ,  [
                    'route' => route('admin.index'),
                    'icon' => 'dashboard',
                    'name' => 'Dashboard',
                ])

                @include('admin.partials.side-item' ,  [
                    'route' => route('admin.node.index'),
                    'icon' => 'indent',
                    'name' => 'Site Structure',
                ])

                @include('admin.partials.side-item' ,  [
                    'route' => route('admin.module.index'),
                    'icon' => 'cubes',
                    'name' => 'Modules',
                ])


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>