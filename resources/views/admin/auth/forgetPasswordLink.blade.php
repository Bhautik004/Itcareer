<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>It Career Computer Training Institute| Forgot Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>It Career Computer Training</b> Institute</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Reset Password</p>

      <form action="{{ route('reset.password.post') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="input-group mb-3">
          <input type="email" name="email"  class="form-control" placeholder="Email">
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
            <input type="password" class="form-control"  placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @if ($errors->has('password'))
            <span  class="error invalid-feedback " style="display:block;">{{ $errors->first('password') }}</span>
            @endif
          </div>


          <div class="input-group mb-3">
            <input type="password" class="form-control"  placeholder="Confirm Password" name="password_confirmation" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @if ($errors->has('password_confirmation'))
            <span  class="error invalid-feedback " style="display:block;">{{ $errors->first('password_confirmation') }}</span>
            @endif
          </div>
        

        <div class="row">

          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block"> Reset Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->



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
