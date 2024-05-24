<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Real State</title>

    <link rel="shortcut icon" href="{{ asset('assets/admin_form/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin_form/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="'{{ asset('assets/admin_form/css/fontawsom-all.min.css')}}'">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin_form/css/style.css')}}" />
</head>

<body class="h-100">
    <div class="container-fluid full-bg h-100">
        <div class="container h-100">

            <div class="row no-margin">
                <div class="bg-layer  ">
                    <form action="{{ route('admin.login')}}" method="post">
                        @csrf
                        <div class="login-box row">
                            <i class="fab fa-codepen"></i>
                            <h3>Admin Login</h3>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                                </div>
                                <input type="email" class="form-control form-control-sm" placeholder="Email" aria-describedby="basic-addon1" name="email">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control form-control-sm" placeholder="Password" aria-describedby="basic-addon1" name="password">
                            </div>
                            <p>forget password ?</p>
                            <button class="btn btn-default">Click to Login</button>
                            <p class="no-c">Not a member yet? <a href="#">Create your Account</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="foter-credit">
                <a href="https://smarteyeapps.com/">Designed by : Smarteyeapps.com</a>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/admin_form/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('assets/admin_form/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/admin_form/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/admin_form/js/script.js')}}"></script>


</html>