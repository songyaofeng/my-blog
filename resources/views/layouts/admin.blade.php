<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - {{ $config['WEB_NAME'] }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="/admin/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin/plugins/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin/plugins/build/css/custom.min.css" rel="stylesheet">
    @yield('my-css')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('admin/index/index') }}" class="site_title"><i class="fa fa-paw"></i> <span>宋耀锋</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="{{ session('user.avatar') }}" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ session('user.name') }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a><i class="fa fa-book"></i> 文章管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/article/index') }}">文章列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-th"></i> 顶部导航 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/category/index') }}">导航列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-th"></i> 网址导航 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/urlCategory/index') }}">导航列表</a></li>
                                </ul>
                            </li>
                            {{--<li>--}}
                                {{--<a><i class="fa fa-th"></i> 工具分类 <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu">--}}
                                    {{--<li><a href="{{ url('admin/toolsCategory/index') }}">工具分类列表</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li>
                                <a><i class="fa fa-th"></i> 网址大全 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/tools/index') }}">网址列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-tags"></i> 标签管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/tag/index') }}">标签列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-comments"></i> 评论管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/comment/index') }}">评论列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-users"></i> 用户管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/user/index') }}">管理员列表</a></li>
                                    <li><a href="{{ url('admin/oauthUser/index') }}">第三方用户列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-link"></i> 友情链接 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/friendshipLink/index') }}">友情链接列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-link"></i> 公告管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/notice/index') }}">公告列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="glyphicon glyphicon-picture"></i> &nbsp;&nbsp;&nbsp;Banner管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/banner/index') }}">Banner列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="glyphicon glyphicon-folder-open"></i> &nbsp;&nbsp;&nbsp;文件管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/file/index') }}">文件列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-commenting"></i> 随言碎语 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/chat/index') }}">随言碎语列表</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-cogs"></i> 系统设置 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/config/edit') }}">设置列表</a></li>
                                    <li><a href="{{ url('admin/gitProject/index') }}">开源项目</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="fa fa-cogs"></i> 视频会员 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{ url('admin/videoVip/index') }}">视频会员列表</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a href="{{ url('admin/config/edit') }}" data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a href="{{ url('admin/login/logout') }}" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset(session('user.avatar')) }}" alt="">{{ session('user.name') }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="{{ url('admin/login/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        {{--成功或者错误提示--}}
        {{--@if (count($errors) > 0)--}}
            {{--<div class="top_nav">--}}
                {{--<div class="nav_menu">--}}
                    {{--<div class="alert alert-danger">--}}
                        {{--<ul>--}}
                            {{--@foreach ($errors->all() as $error)--}}
                                {{--<li>{{ $error }}</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--@if(Session::has('alert-message'))--}}
            {{--<div class="top_nav">--}}
                {{--<div class="nav_menu">--}}
                    {{--<div class="alert {{session('alert-class')}}">--}}
                        {{--<ul>--}}
                            {{--<li>{{ session('alert-message') }}</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}
    <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                {{--<div class="page-title">--}}
                    {{--<div class="title_left">--}}
                        {{--<h3>@yield('nav') <small>@yield('description')</small></h3>--}}
                    {{--</div>--}}

                    {{--<div class="title_right">--}}
                        {{--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Search for...">--}}
                    {{--<span class="input-group-btn">--}}
                      {{--<button class="btn btn-default" type="button">Go!</button>--}}
                    {{--</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- footer content -->
        <footer>
            <div class="pull-right">

            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>



<!-- jQuery -->
<script src="/admin/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/admin/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/admin/plugins/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/admin/plugins/nprogress/nprogress.js"></script>
<!--sweetAlert2-->
<script src="/admin/plugins/sweetalert2/sweetalert2.js"></script>
<!-- Custom Theme Scripts -->
<script src="/admin/plugins/build/js/custom.min.js"></script>
<!-- Layer -->
<script src="/admin/plugins/layer-2.4/layer.js"></script>
@yield('my-js')
</body>
</html>