<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', 'Log In - Administrator')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('sb-admin/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('fontawesome-free/js/all.min.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-lg-4 mx-auto">
                    <form class="form-standard mt-100">
                        <div class="form-group mb-80">
                            <img src="{{ asset('img/dp-logo-white.png') }}" style="display:block;" class="mx-auto" width="100px">
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control form-control-standard font-weight-light" type="text"
                                    placeholder="Username">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="pe-7s-user pe-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <div class="input-group">
                                <input class="form-control form-control-standard  font-weight-light" type="password"
                                    placeholder="Password">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="pe-7s-key pe-lg"
                                            style="padding-right: 5px;"></i></span>
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group mt-4">
                            <button class="btn btn-outline-light btn-login btn-block"> Login</button>
                        </div>
                        <div class="form-group text-right">
                            <a href="#" class="forgot-pass text-right">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>