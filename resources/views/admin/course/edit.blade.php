@extends('admin.layouts.layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Course</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Course</li>
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
                            <h3 class="card-title">Update Course</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                         <form method="post" action="{{ route('courses.update',$course->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Course name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $course->name }}" placeholder="Enter Course name">
                                                
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Course Duration</label>
                                            <input type="text" class="form-control" name="duration"
                                                value="{{ $course->duration }}" placeholder="Enter Course Duration">
                                            @if ($errors->has('duration'))
                                                <span class="text-danger">{{ $errors->first('duration') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Course Picture</label>
                                            <input accept="image/png, image/gif, image/jpeg, image/jpg" name="course_img" class="form-control" type="file" >
                                        </div>
                                         @if ($errors->has('course_img'))
                                                <span class="text-danger">{{ $errors->first('course_img') }}</span>
                                        @endif
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Course Content</label>
                                            <textarea class="ckeditor form-control" name="content"> {{ $course->content }}</textarea>
                                            {{-- <textarea class="form-control" rows="3" placeholder="Enter Course Content" name="content">{{ old('content') }}</textarea> --}}
                                            @if ($errors->has('content'))
                                                <span class="text-danger">{{ $errors->first('content') }}</span>
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

