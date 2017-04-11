<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/nifty.min.css')}}" rel="stylesheet">



    <link href="{{asset('css/nifty-demo-icons.min.css')}}" rel="stylesheet">



    <link href="{{asset('css/nifty-demo.min.css')}}" rel="stylesheet">


    <link href="{{asset('css/magic-check.min.css')}}" rel="stylesheet">


    <link href="{{asset('css/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/pace.min.js')}}"></script>

    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/nifty.min.js')}}"></script>

    <script src="{{asset('js/bg-images.js')}}"></script>




</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="cls-container">

    <!-- BACKGROUND IMAGE -->
    <!--===================================================-->
    <div id="bg-overlay"></div>


    <!-- LOGIN FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h3 class="h4 mar-no">账号登录</h3>

                </div>
                <form action="{{url('admin/login')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" placeholder="用户名" autofocus name="name" id="name" value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" placeholder="密码" name="password" id="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit" >登录</button>

                    <button class="btn btn-primary btn-lg btn-block" type="button"><a href="{{url('admin/forgetpass')}}" style="color: white">忘记密码</a></button>

                </form>
            </div>
        </div>
    </div>
    <!--===================================================-->


    <!-- DEMO PURPOSE ONLY -->
    <!--===================================================-->
    <div class="demo-bg">
        <div id="demo-bg-list">
            <div class="demo-loading"><i class="psi-repeat-2"></i></div>
            <img class="demo-chg-bg bg-trans active" src="{{asset('img/bg-img/thumbs/bg-trns.jpg')}}" alt="Background Image">
            <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-1.jpg')}}" alt="Background Image">
            <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-2.jpg')}}" alt="Background Image">
            <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-3.jpg')}}" alt="Background Image">
            <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-4.jpg')}}" alt="Background Image">
            <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-5.jpg')}}" alt="Background Image">
            <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-6.jpg')}}" alt="Background Image">
            <img class="demo-chg-bg" src="{{asset('img/bg-img/thumbs/bg-img-7.jpg')}}" alt="Background Image">
        </div>
    </div>
    <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


</body>
</html>
