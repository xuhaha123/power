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


    <!-- PASSWORD RESETTING FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="pad-ver">
                    <i class="pli-mail icon-3x"></i>
                </div>
                <p class="text-muted pad-btm">请通过邮箱找回密码 </p>
                <form action="" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="请输入邮箱" name="email">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-success btn-block" type="submit">发送邮箱</button>
                    </div>
                </form>
                <div class="pad-top">
                    <a href="{{url('admin/login')}}" class="btn-link mar-rgt">返回登录</a>
                </div>
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

</body>
</html>
