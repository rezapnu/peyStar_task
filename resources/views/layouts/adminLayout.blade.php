<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> کنترل پنل مدیریت</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="/images/favicon.png" rel="icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="auth-check" content="{{ auth()->check() }}">

    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/adminLayout.css">
    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            {{--<div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۴ پیام خوانده نشده</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="admin/dist/img/user2-160x160.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                علیرضا
                                                <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="admin/dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نگین
                                                <small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="admin/dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نسترن
                                                <small><i class="fa fa-clock-o"></i> امروز</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="admin/dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نگین
                                                <small><i class="fa fa-clock-o"></i> دیروز</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="admin/dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نسترن
                                                <small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">۱۰</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۱۰ اعلان جدید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">۹</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۹ کار برای انجام دارید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت دکمه
                                                <small class="pull-left">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت قالب جدید
                                                <small class="pull-left">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                تبلیغات
                                                <small class="pull-left">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت صفحه فرود
                                                <small class="pull-left">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">نمایش همه</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">علیرضا حسینی زاده</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    علیرضا حسینی زاده
                                    <small>مدیریت کل سایت</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">صفحه من</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">فروش</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">دوستان</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                                </div>
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">خروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>--}}
        </nav>
    </header>
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">

                        <img src="/images/images.jpg" class="img-circle" alt="User Image">

                </div>
                <div class="pull-right info">

                    <a href="#"><i class="fa fa-circle text-success"></i> کاربر آنلاین</a>
                </div>
            </div>
            <!-- search form -->
        {{--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستجو">
                <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>--}}
        <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">.</li>

                <router-link tag="li" to="/">
                    <a href="#"><i class="fa fa-home"></i> <span> داشبورد </span></a>
                </router-link>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>مدیریت کاربران</span>
                        <span class="pull-left-container"><i class="fa fa-angle-right pull-left"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <router-link tag="li" to="/user/list">
                            <a href="#"><i class="fa fa-circle-o"></i> کاربران مدیر </a>
                        </router-link>

                        <router-link tag="li" to="/user/create">
                            <a href="#"><i class="fa fa-circle-o"></i>افزودن کاربر </a>
                        </router-link>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>مدیریت کاربران مشتری</span>
                        <span class="pull-left-container"><i class="fa fa-angle-right pull-left"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <router-link tag="li" to="/customer/list">
                            <a href="#"><i class="fa fa-circle-o"></i> لیست کاربران مشتری </a>
                        </router-link>

                        <router-link tag="li" to="/customer/create">
                            <a href="#"><i class="fa fa-circle-o"></i>افزودن کاربر مشتری </a>
                        </router-link>

                    </ul>
                </li>

                <router-link tag="li" to="/lottery/new">
                    <a href="#"><i class="fa fa-cube"></i>مدیریت قرعه کشی </a>
                </router-link>

                <li><a href="panel/logout"><i class="fa fa-sign-out"></i> <span>خروج</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div>
        <router-view></router-view>
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer text-left">
        <strong>پنل مدیریت شرکت فرکیو</strong>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/admin/jquery/jquery.min.js"></script>

<script src="/js/admin.js"></script>

<script src="/js/app.js"></script>

<!-- DataTables -->
<script src="/admin/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- alertifyjs -->
<script src="/admin/alertifyjs/alertify.min.js"></script>


<script>
    $(document).ready(function () {
        window.Laravel = {};
        window.Laravel.Auth = '{{ Auth::check() }}' == '' ? false : true;
        window.Laravel.csrfToken = '{{ csrf_token() }}';
    });

</script>

</body>
</html>
