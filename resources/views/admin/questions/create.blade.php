@extends('admin.layouts.layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Questions</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Questions</li>
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
                        <h3 class="card-title">Create Questions</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('questions.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                               <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Select Course</label>
                                        <select class="custom-select" name="course_id" >
                                            <option value="0">Select Course</option>
                                            @foreach ($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                
                                        </select>
                                        @if ($errors->has('course_id'))
                                        <span class="text-danger">{{ $errors->first('course_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Question Text</label>
                                        <input type="text" class="form-control" name="question" value="{{ old('question') }}" placeholder="Enter Question">
                                        @if ($errors->has('question'))
                                        <span class="text-danger">{{ $errors->first('question') }}</span>
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

