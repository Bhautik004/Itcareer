@extends('admin.layouts.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Manager</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Manager</li>
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
                            <h3 class="card-title">Create Manager</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('managers.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First name</label>
                                            <input type="text" name="f_name" class="form-control"
                                                value="{{ old('f_name') }}" placeholder="Enter first name">
                                            @if ($errors->has('f_name'))
                                                <span class="text-danger">{{ $errors->first('f_name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Middle name</label>
                                            <input type="text" class="form-control" name="m_name"
                                                value="{{ old('m_name') }}" placeholder="Enter middle name">
                                            @if ($errors->has('m_name'))
                                                <span class="text-danger">{{ $errors->first('m_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Last name</label>
                                            <input type="text" class="form-control" name="l_name"
                                                value="{{ old('l_name') }}" placeholder="Enter last name">
                                            @if ($errors->has('l_name'))
                                                <span class="text-danger">{{ $errors->first('l_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email Id</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ old('email') }}" placeholder="Enter email id">
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
                                                value="{{ old('phone') }}" placeholder="Enter phone no.">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alter Phone No.</label>
                                            <input type="text" class="form-control" name="alter_phone"
                                                value="{{ old('alter_phone') }}" placeholder="Enter Alter phone no.">
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
                                                <option value="m" >Male
                                                </option>
                                                <option value="f">Female
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
                                                <input type="text" name="dob" value="{{ old('dob') }}"
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


                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>

                                            <textarea class="form-control" rows="3" placeholder="Enter address" name="address">{{ old('address') }}</textarea>
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
                                                value="{{ old('pincode') }}" placeholder="Enter PinCode">
                                            @if ($errors->has('pincode'))
                                                <span class="text-danger">{{ $errors->first('pincode') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Select Branch</label>
                                            <select class="custom-select" name="branch_id">
                                                 <option value="0">Select Branch</option>
                                                @foreach ($branchs as $branch) 
                                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('branch_id'))
                                                <span class="text-danger">{{ $errors->first('branch_id') }}</span>
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
            </div>
        </div>
    </section>
@stop

