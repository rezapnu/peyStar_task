<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ورود | کنترل پنل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="/css/login.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>ورود به سایت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود را بزنید</p>
        <p class="login-box-msg">user: admin </p>
        <p class="login-box-msg"> password:123456</p>

        <form action="{{ route('login') }}" method="post">
            @csrf

            @if ($errors->has('username'))
                <span class="help-block" style="direction: rtl; color: rgba(154,0,0,0.99)">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif

            @if ($errors->has('password'))
                <span class="help-block" style="direction: rtl; color: rgba(154,0,0,0.99)">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="نام کاربری">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="رمز عبور">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <br>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                </div>
                <!-- /.col -->
            </div>
            <br>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/admin/jquery/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="/js/bootstrap.min.js"></script>


</body>
</html>
