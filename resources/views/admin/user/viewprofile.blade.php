@extends('admin.layouts.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('users.update-user') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <input type="hidden" name="changeprofile" value="1">
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First name</label>
                                            <input type="text" name="f_name" class="form-control"
                                                value="{{ $user->f_name }}" placeholder="Enter first name">
                                            @if ($errors->has('f_name'))
                                                <span class="text-danger">{{ $errors->first('f_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Middle name</label>
                                            <input type="text" class="form-control" name="m_name"
                                                value="{{ $user->m_name }}" placeholder="Enter middle name">
                                            @if ($errors->has('m_name'))
                                                <span class="text-danger">{{ $errors->first('m_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Last name</label>
                                            <input type="text" class="form-control" name="l_name"
                                                value="{{ $user->l_name }}" placeholder="Enter last name">
                                            @if ($errors->has('l_name'))
                                                <span class="text-danger">{{ $errors->first('l_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email Id</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $user->email }}" placeholder="Enter email id">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone No.</label>
                                            <input type="text" class="form-control" name="phone"
                                                value="{{ $user->phone }}" placeholder="Enter phone no.">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alter Phone No.</label>
                                            <input type="text" class="form-control" name="alter_phone"
                                                value="{{ $user->alter_phone }}" placeholder="Enter Alter phone no.">
                                            @if ($errors->has('alter_phone'))
                                                <span class="text-danger">{{ $errors->first('alter_phone') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Select Gender</label>
                                            <select class="custom-select" name="gender">
                                                <option value="0">Select Gender</option>
                                                <option value="m " {{ $user->gender == 'm' ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="f" {{ $user->gender == 'f' ? 'selected' : '' }}>Female
                                                </option>
                                            </select>
                                            @if ($errors->has('gender'))
                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <div class="input-group date" id="dob" data-target-input="nearest">
                                                <input type="text" name="dob" value="{{ $user->dob }}"
                                                    class="form-control datetimepicker-input"
                                                    data-toggle="datetimepicker"
                                                    data-target="#dob" />
                                                <div class="input-group-append" data-target="#dob"
                                                    data-toggle="datetimepicker" >
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>

                                            </div>
                                            @if ($errors->has('dob'))
                                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Profile Picture</label>
                                            <input accept="image/png, image/gif, image/jpeg, image/jpg"     name="profile_pic" class="form-control" type="file" >
                                        </div>
                                    </div>


                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>

                                            <textarea class="form-control" rows="3" placeholder="Enter address" name="address">{{ $user->address }}</textarea>
                                            @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Select State</label>
                                            <select class="custom-select" name="state" id="state-dropdown">
                                                <option value="0">Select State</option>
                                                @foreach ($states as $state) 
                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach

                                            </select>
                                            @if ($errors->has('state'))
                                                <span class="text-danger">{{ $errors->first('state') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Select City</label>
                                            <select class="custom-select" name="city" id="city-dropdown">
                                            </select>
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Pin Code</label>
                                            <input type="text" class="form-control" name="pincode"
                                                value="{{ $user->pincode }}" placeholder="Enter PinCode">
                                            @if ($errors->has('pincode'))
                                                <span class="text-danger">{{ $errors->first('pincode') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('users.updatepassword') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current Password</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Enter Current Password">
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">New Password</label>
                                            <input type="password" name="new_password" class="form-control"
                                                placeholder="Enter new Password">
                                            @if ($errors->has('new_password'))
                                                <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confim new Password</label>
                                            <input type="password" name="new_confirm_password" class="form-control"
                                                placeholder="Enter confim new Password">
                                            @if ($errors->has('new_confirm_password'))
                                                <span
                                                    class="text-danger">{{ $errors->first('new_confirm_password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop

