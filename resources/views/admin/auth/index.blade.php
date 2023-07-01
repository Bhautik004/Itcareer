<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin / Log in</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">

</head>
@php
    if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_password'])){
        $login_email = $_COOKIE['login_email'];
        $login_password = $_COOKIE['login_password'];
    }else{
        $login_email = '';
        $login_password = '';
    }

@endphp
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>It Career Computer Training</b> Institute</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('admin.auth.login') }}">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="text" name="email" value="{{$login_email}}" class="form-control" placeholder="Email">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @if ($errors->has('email'))
          <span  class="error invalid-feedback " style="display:block;">{{ $errors->first('email') }}</span>
          @endif
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" value="{{$login_password}}" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @if ($errors->has('password'))
          <span  class="error invalid-feedback " style="display:block;">{{ $errors->first('password') }}</span>
          @endif
        </div>
        <input type="hidden" name="fcm_token" value="" id="fcm_token">
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" >
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit"  class="btn btn-primary btn-block fcm">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{ route('forget.password.get') }}">I forgot my password</a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@include('admin.layouts.alert')

<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
