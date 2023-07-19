@extends('admin.layouts.layout')
@section('content')

<?php
    $count = 0;
    $courseCreate = check_permission('Course','create');
    $courseEdit = check_permission('Course','edit');
    $courseDelete = check_permission('Course','destroy');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Course</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Course</li>
              </ol>
            </div>
            <!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Course List</h3>

                        @if($courseCreate == 1)
                        <div class="d-flex float-right">
                            <a href="{{route('courses.create')}}">
                            <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add Course</button>
                            </a>
                        </div>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="leads" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Course Name</th>
                                <th>Course Duration</th>
                                <th>Status</th>
                                @if($courseEdit == 1 || $courseDelete == 1)
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $coursedata)
                            @php $count++;@endphp
                            <tr>
                              <td>{{$count}}</td>
                              <td>{{ $coursedata['name'] }} </td>
                              <td>{{ $coursedata['duration'] }}</td>
                               <td>
                                <a href="JavaScript:void(0)" class="badge {{$coursedata->status == 1 ? "bg-success" : "bg-danger"}} activebtn"
                                data-id="{{ $coursedata->id }}"  data-status="{{$coursedata->status}}">{{
                                $coursedata->status == 1 ? "Active" : "Deactive" }}</a>

                                </td>
                              <td>
                                @if($courseEdit == 1)
                                    <a class="btn bg-primary" href="{{route('courses.edit',$coursedata['id'])}}"><i class="fas fa-edit"></i></a>
                                @endif
                                @if($courseDelete == 1)
                                    <button class="btn btn-danger deleteButton" type="button"  data-id="{{ $coursedata->id }}"><i class="fas fa-trash"></i></button>
                                @endif
                              </td>
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
$("#leads").DataTable({
    "responsive": true,
    "lengthChange": false,
    "columnDefs": [
        { width: 20, targets: 0, "className": "text-center", },
        { width: 210, targets: 3 }
    ],
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#leads_wrapper .col-md-6:eq(0)');

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
                url: '{{ route('course.destroy') }}',
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
                    if(data.error){
                        toastr.error(data.error);
                    }else{
                        toastr.success(data.success);
                        location.reload();
                    }

                },
            });
        }
    });
});

 $(document).on('click','.activebtn',function(e){
        var id = $(this).data('id');
        var status = $(this).data('status');
        e.preventDefault();
        if(status == 1){
            swal({
                title: "Careful!",
                text: "Are you sure you want to Deactive ?",
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
                    url: '{{ route('courses.deactive') }}',
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
        }else{
            swal({
                title: "Careful!",
                text: "Are you sure you want to Active ?",
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
                url: '{{ route('courses.deactive') }}',
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
        }
    });
@stop