@extends('admin.layouts.layout')
@section('content')


<?php
    $count = 0;
    $onDemandExamCreate = check_permission('onDemandExam','create');
    $onDemandExamEdit = check_permission('onDemandExam','edit');
    $onDemandExamDelete = check_permission('onDemandExam','destroy');
    $onDemandExamView = check_permission('onDemandExam','show');
    $url =  url('/images');
    $doc_url =  url('/Student_Education_Document');
?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">On Demand Exam </h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item active">On Demand Exam</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">On Demand Exam List</h3>

                   @if($onDemandExamCreate == 1)
                  <div class="d-flex float-right" style="margin-left: 10px;">
                    <a href="{{route('onDemandExams.create')}}">
                    <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add On Demand Exam Form</button>
                    </a>
                  </div>
                  @endif

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="roles" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No.</th>
                      <th>Register Date</th>
                      <th>Exam Date</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Course name</th>
                      <th>Status</th>

                      @if($onDemandExamEdit == 1 || $onDemandExamDelete == 1)
                        <th>Action</th>
                      @endif
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($onDemandExam as $onDemandExamData)
                        @php $count++;@endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$onDemandExamData['created_at']->format('d-m-Y')}}</td>
                      <td>{{$onDemandExamData->exam_date}}</td>
                      <td >
                        {{$onDemandExamData->f_name}} {{$onDemandExamData->l_name}}
                     </td>
                     <td>{{$onDemandExamData->email}}<br>{{$onDemandExamData->phone}}<br>Date of Birth : {{$onDemandExamData->dob}}
                        </td>
                      {{-- <td>{{ $onDemandExamData->branchName->name}}</td> --}}
                      <td>{{ $onDemandExamData->courseName->name}}</td>
                      <td>
                        <a href="JavaScript:void(0)" class="badge {{$onDemandExamData->status == 1 ? "bg-success" : "bg-danger"}} activebtn"
                        data-id="{{ $onDemandExamData->id }}"  data-status="{{$onDemandExamData->status}}">{{
                        $onDemandExamData->status == 1 ? "Active" : "Deactive" }}</a>

                    </td>
                      @if($onDemandExamEdit == 1 || $onDemandExamDelete == 1)
                      <td>

                           @if($onDemandExamEdit == 1)
                                <a class="btn bg-primary" href="{{route('onDemandExams.edit',$onDemandExamData->id)}}"><i class="fas fa-edit"></i></a>
                            @endif

                            @if($onDemandExamDelete == 1)
                                <button class="btn btn-danger deleteButton"  data-id="{{ $onDemandExamData->id }}" type="submit"><i class="fas fa-trash"></i></button>
                            @endif
                                <a class="btn bg-info" href="{{route('onDemandExam.download',['id'=>Crypt::encryptString($onDemandExamData->id)] )}}"><i class="fas fa-download"></i></a>

                              {{-- <button class="btn btn-info deleteButton"  data-id="{{ $onDemandExamData->id }}" type="submit"><i class="fas fa-download"></i></button> --}}

                            {{-- @if($onDemandExamDelete == 1)
                                <button class="btn btn-info deleteButton"  data-id="{{ $onDemandExamData->id }}" type="submit"><i class="fas fa-download"></i></button>
                            @endif --}}

                      </td>
                      @endif
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
      </div>
    </div>
</section>

@stop
@section('script')




$('.deleteButton').on('click', function(e){

    var id = $(this).data('id');
    e.preventDefault();
    swal({
            title: "Careful!",
            text: "Are you sure you want to delete ?",
            icon: "warning",
            dangerMode: true,
            buttons: {
            cancel: "Exit",
            confirm: "Confirm",
        },
    })
    .then ((willDelete) => {
    if (willDelete) {
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
        url: '{{ route('onDemandExam.destroy') }}',
        type:'POST',
        dataType:'json',
        data:{id:id,_token: token},
        success: function(data) {
                    toastr.options =
                        {
                            "showDuration": "2000",
                            "hideDuration": "2000",
                            "timeOut": "2000",
                            "extendedTimeOut": "2000",
                            "positionClass": "toast-top-center",
                        };
        toastr.success(data.success);
        location.reload();
        },
        });
    }
    });
});


    $("#roles").DataTable({
        "responsive": true,
        "lengthChange": false,
        "column": [
            {targets:0, width: 20 , "className": "text-center", },
            { width: 20, targets: 1, "className": "text-center", },
            { "data":"Status",width: 120},


        ],
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#roles_wrapper .col-md-6:eq(0)');

@stop

