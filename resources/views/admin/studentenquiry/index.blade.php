@extends('admin.layouts.layout')
@section('content')

<?php
    $count = 0;
    $studentEnquiryCreate = check_permission('studentEnquiry','create');
    $studentEnquiryEdit = check_permission('studentEnquiry','edit');
    $studentEnquiryDelete = check_permission('studentEnquiry','destroy');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Student Enquiry</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Student Enquiry</li>
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
                        <h3 class="card-title">Student Enquiry List</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="leads" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                                <th>Center Name</th>
                                <th>Course</th>
                                <th>Enquiry Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentenquirys as $studentenquirysData)
                            @php $count++;@endphp
                            <tr>
                              <td>{{$count}}</td>
                              <td>{{ $studentenquirysData['surname'] }} {{$studentenquirysData['name']}} </td>
                              <td>{{ $studentenquirysData['phone'] }}</td>
                              <td>{{ $studentenquirysData->branchName->name}}</td>
                              <td>{{ $studentenquirysData->courseName->name}}</td>
                              
                              <td>{{ $studentenquirysData['created_at']->format('d-m-Y') }}</td>

                               <td>
                                <a href="JavaScript:void(0)" class="badge {{$studentenquirysData->status == 1 ? "bg-success" : "bg-danger"}} activebtn"
                                data-id="{{ $studentenquirysData->id }}"  data-status="{{$studentenquirysData->status}}">{{
                                $studentenquirysData->status == 1 ? "Active" : "Deactive" }}</a>

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
   
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#leads_wrapper .col-md-6:eq(0)');


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
                    url: '{{ route('branchs.deactive') }}',
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
                url: '{{ route('branchs.deactive') }}',
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