@extends('admin.layouts.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Branch</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Branch</li>
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
                            <h3 class="card-title">Update Branch</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                         <form method="post" action="{{ route('branchs.update',$branch->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                
                                <div class="row">

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Branch Code</label>
                                            <input type="text" name="branch_code" class="form-control" value="{{ $branch->branch_code }}"
                                                placeholder="Enter Branch Code">
                                            @if ($errors->has('branch_code'))
                                            <span class="text-danger">{{ $errors->first('branch_code') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Branch name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $branch->name }}" placeholder="Enter Branch name">
                                                <input type="text" id="edit_form" class="form-control"
                                                value="0"  hidden>
                                                
                                            <input type="text" id="city_id" class="form-control"
                                                value="{{$branch->city}}"  hidden>

                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email Id</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $branch->email }}" placeholder="Enter email id">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone No.</label>
                                            <input type="text" class="form-control" name="phone"
                                                value="{{ $branch->phone }}" placeholder="Enter phone no.">
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>

                                            <textarea class="form-control" rows="3" placeholder="Enter address" name="address">{{ $branch->address }}</textarea>
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
                                                    <option value="{{$state->id}}" {{ $branch->state == $state->id ? 'selected' : '' }}>{{$state->name}}</option>
                                                @endforeach

                                            </select>
                                            @if ($errors->has('state'))
                                                <span class="text-danger">{{ $errors->first('state') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Select District</label>
                                            <select class="custom-select" name="city" id="city-dropdown">
                                            </select>
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Area</label>
                                            <input type="text" class="form-control" name="area"
                                                value="{{ $branch->area }}" placeholder="Enter area">
                                            @if ($errors->has('area'))
                                                <span class="text-danger">{{ $errors->first('area') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('branchs.index')}}"  class="btn btn-secondary bg-secondary">Cancel</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

