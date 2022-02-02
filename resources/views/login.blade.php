<!DOCTYPE html>
<html lang=""> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Panel</title>
    <link rel="shortcut icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('public/admin/libs/assets/animate.css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::to('public/admin/libs/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::to('public/admin/libs/assets/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::to('public/admin/libs/jquery/bootstrap/dist/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::to('public/admin/css/font.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::to('public/admin/css/app.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{URL::to('public/admin/css/login-page.css')}}"> </head>
    <style>
    body {
        background-image: url('public/admin/img/bg2.jpg');
        background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }
    .loginBoxSec {
        background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 5% 0;
    position: fixed;
    }
    .loginBox {
        background-color: #b9000d;
    color: #fff;
    }
    .list-group-sm .list-group-item {
    padding: 3px 10px;
    margin-bottom: 2%;
    border-radius: 5px;
}
.form-control {
    font-size:14px;
}
    </style>
<body>
    <div class="header">
        <div class="container loginBoxSec">
            <div class="col-sm-7"></div>
            <div class="col-sm-5 loginBox">
                <div class="app app-header-fixed ">
                    <div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
                        <div class="m-b-lg">
                            <div class="row">
                                <div class="col-xs-12">
                                <img src="public/user/img/Logo.png" alt="troology" width="70%"> 
                                 </div>
                                <!-- <div class="col-xs-7">
                                    <h3 class="panel-name">Admin Panel »</h3>
                                </div> -->
                            </div>
                            <form name="form" class="form-validation" method="post" action="{{URL::to('login')}}">
                            @csrf
                                <div class="text-danger wrapper text-center" ng-show="authError"> </div>
                                <div class="list-group list-group-sm">
                                    <div class="list-group-item left-inner-addon">
                                    <!-- <i class="icon-user"></i> -->
                                        <input type="email" placeholder="User Name" class="form-control no-border" name="email" ng-model="user.email" id="email" required> </div>
                                    <div class="list-group-item left-inner-addon">
                                    <!-- <i class="icon-lock"></i> -->
                                        <input type="password" placeholder="Password" class="form-control no-border" name="password"  ng-model="user.password" required> </div>
                                    <div class="checkbox">
                                        <label class="i-checks i-checks-sm">
                                            <input type="checkbox"><i></i> Remember me </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn m-b-xs w-xs btn-success" ng-click="login()" ng-disabled='form.$invalid'>Sign in</button>
                                <button class="btn m-b-xs w-xs btn-info" type="reset">Reset</button>
                                <div class="text-left m-t m-b forgot-pass"><a ui-sref="access.forgotpwd">Forgot password?</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="navbar navbar-fixed-bottom">
        <div class="container-fluid">
            <p class="navbar-text pull-left">
                <a href="http://www.troology.com/" target="_blank">
                <img src="public/user/img/Logo.png" alt="troology" width="140">
                </a>
            </p>
            <p class="navbar-text pull-left contact-footer"> <i class="icon-screen-smartphone"></i> <a href="callto:+915223929555">(+91) 522 3929 555 /666</a> </p>
            <p class="navbar-text pull-left contact-footer"> <i class="icon-envelope"></i> <a href="mailto:info@troology.com">info@troology.com</a> </p>
            <p class="navbar-text pull-left contact-footer"> <i class="icon-mouse"></i> <a href="http://www.troology.com/" target="_blank">Troology.com</a> </p>
        </div>
    </div> -->
    <script src="../libs/jquery/jquery/dist/jquery.js"></script>
    <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/ui-load.js"></script>
    <script src="js/ui-jp.config.js"></script>
    <script src="js/ui-jp.js"></script>
    <script src="js/ui-nav.js"></script>
    <script src="js/ui-toggle.js"></script>
    <script src="js/ui-client.js"></script>


</body>

</html>