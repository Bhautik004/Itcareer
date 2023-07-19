@extends('admin.layouts.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Student</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Student</li>
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
                            <h3 class="card-title">Create Student</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Register Number</label>
                                            <input type="text" name="register_no" class="form-control"
                                                value="{{$serialNumber}}"  disabled>

                                            <input type="text" name="register_no" class="form-control"
                                                value="{{$serialNumber}}"  hidden>
                                        </div>
                                    </div>
                                </div>
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

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Profile Picture</label>
                                            <input accept="image/png, image/gif, image/jpeg, image/jpg"     name="profile_pic" class="form-control" type="file" >
                                        </div>
                                         @if ($errors->has('profile_pic'))
                                                <span class="text-danger">{{ $errors->first('profile_pic') }}</span>
                                        @endif
                                    </div>


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
                                            <label for="exampleInputPassword1">Qualification</label>
                                            <input type="text" class="form-control" name="last_qualification"
                                                value="{{ old('last_qualification') }}" placeholder="Enter Last Qualification">
                                            @if ($errors->has('last_qualification'))
                                                <span class="text-danger">{{ $errors->first('last_qualification') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Select Course</label>
                                            <select class="custom-select" name="course_id">
                                                 
                                                <option value="0">Select Course</option>

                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                                @endforeach

                                            </select>
                                            
                                            @if ($errors->has('course_id'))
                                                <span class="text-danger">{{ $errors->first('course_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Photo Id Proof(Aadhar Card/ Pan Card )</label>
                                            <input accept="image/png, image/gif, image/jpeg, image/jpg"     name="id_proof" class="form-control" type="file" >
                                        </div>
                                        @if ($errors->has('id_proof'))
                                                <span class="text-danger">{{ $errors->first('id_proof') }}</span>
                                        @endif
                                    </div>

                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Marksheet</label>
                                            <input accept="image/png, image/gif, image/jpeg, image/jpg"     name="last_marksheet" class="form-control" type="file" >
                                        </div>
                                        @if ($errors->has('last_marksheet'))
                                                <span class="text-danger">{{ $errors->first('last_marksheet') }}</span>
                                        @endif
                                        
                                    </div>

                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Signature</label>
                                            <input accept="image/png, image/gif, image/jpeg, image/jpg"     name="signature" class="form-control" type="file" >
                                        </div>
                                        @if ($errors->has('signature'))
                                                <span class="text-danger">{{ $errors->first('signature') }}</span>
                                        @endif
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

