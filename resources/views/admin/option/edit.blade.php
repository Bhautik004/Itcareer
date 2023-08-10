@extends('admin.layouts.layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update Options</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Update Options</li>
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
                        <h3 class="card-title">Update Options</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{ route('options.update',$options->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Select Question</label>
                                        <select class="custom-select" name="question_id">
                                            <option value="0">Select Question</option>
                                            @foreach ($questions as $question)
                                            <option value="{{$question->id}}" {{ $options->question_id == $question->id ? 'selected' : '' }}>{{$question->question}}</option>
                                            @endforeach

                                        </select>
                                        @if ($errors->has('question_id'))
                                        <span class="text-danger">{{ $errors->first('question_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Select Points</label>
                                        <select class="custom-select" name="points">
                                            <option value="00">Select Points</option>
                                            <option value="1" {{ $options->points == 1 ? 'selected' : '' }}>1</option>
                                            <option value="0" {{ $options->points == 0 ? 'selected' : '' }}>0</option>
                                            
                                
                                        </select>
                                        @if ($errors->has('points'))
                                        <span class="text-danger">{{ $errors->first('points') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Options Text</label>
                                        <input type="text" class="form-control" name="option_text"
                                            value="{{ $options->option_text }}" placeholder="Enter Options" >
                                        @if ($errors->has('options'))
                                        <span class="text-danger">{{ $errors->first('options') }}</span>
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