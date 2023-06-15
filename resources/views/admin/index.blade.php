<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

</head>

<body class="hold-transition d-block justify-center align-content-center ">
    <div class=" text-center">
        <div class="login-logo">
            <a href=""><b>It Career</b> Institute </a>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <!-- /.login-logo -->

            <div class="row text-center">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Admin Portal</h3>
                        </div>
                        <a href="{{route('admin-login')}}" class="small-box-footer">Click to Login <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Branch Portal</h3>
                        </div>
                        <a href="#" class="small-box-footer">Click to Login <i class="fas fa-arrow-circle-right"></i></a>
                       
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Student Exam</h3>
                        </div>
                        
                        <a href="#" class="small-box-footer">Click to Login <i class="fas fa-arrow-circle-right"></i></a>

                    </div>
                </div>
               
                <!-- ./col -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </section>

    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @include('admin.layouts.alert')

    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

</body>

</html>
