<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>register </title>

    <!-- Bootstrap -->
    <link href="{{ asset('public/design/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('public/design/icon/css/all.css')}}">
    <!-- NProgress -->
    <link href="{{ asset('public/design/css/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('public/design/css/animate.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('public/design/css/custom.min.css')}}" rel="stylesheet">

  </head>

  <body>
  <div class="login">

    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
            <form action="{{route('student.register')}}" method="post">
                <!-- {{route('admin.login')}} -->
                @csrf

                <h1>Register Form</h1>
                <div>
                    <!-- <input type="text" class="form-control" placeholder="Email" required="" /> -->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div>
                    <!-- <input type="password" class="form-control" placeholder="Password" required="" /> -->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-secondary btn-default">Register</button>
                    <a class="reset_pass" href="#">Lost your password?</a> 
                    <!-- {{ route('admin.password.request') }} -->
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                <div class="clearfix"></div>
                <a href="{{url('/')}}">Login</a>
                <br />
                <div>
                    <h1><i class="fa fa-paw"></i>Hire Study</h1>
                    <p>©2020 All Rights Reserved. Hire Study! is a Education site. Privacy and Terms</p>
                    </div>
                </div>
            </form>
            </section>
        </div>
    </div>
    </div>
</body>