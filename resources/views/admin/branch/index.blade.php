@extends('admin.layouts.layout')
@section('content')

<?php
    $count = 0;
    $branchCreate = check_permission('Branch','create');
    $branchEdit = check_permission('Branch','edit');
    $branchDelete = check_permission('Branch','destroy');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Branch</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Branch</li>
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
                        <h3 class="card-title">Branch List</h3>

                        @if($branchCreate == 1)
                        <div class="d-flex float-right">
                            <a href="{{route('branchs.create')}}">
                            <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add Branch</button>
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
                                <th>Branch Code</th>
                                <th>Branch Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Status</th>
                                @if($branchEdit == 1 || $branchDelete == 1)
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($branchs as $branchdata)
                            @php $count++;@endphp
                            <tr>
                              <td>{{$count}}</td>
                              <td>{{ $branchdata['branch_code'] }} </td>
                              <td>{{ $branchdata['name'] }} </td>
                              <td>{{ $branchdata['email'] }}</td>
                              <td>{{ $branchdata['phone'] }}</td>
                              <td>{{ $branchdata['address'] }}</td>
                               <td>
                                <a href="JavaScript:void(0)" class="badge {{$branchdata->status == 1 ? "bg-success" : "bg-danger"}} activebtn"
                                data-id="{{ $branchdata->id }}"  data-status="{{$branchdata->status}}">{{
                                $branchdata->status == 1 ? "Active" : "Deactive" }}</a>

                                </td>
                              <td>
                                @if($branchEdit == 1)
                                    <a class="btn bg-primary" href="{{route('branchs.edit',$branchdata['id'])}}"><i class="fas fa-edit"></i></a>
                                @endif
                                @if($branchDelete == 1)
                                    <button class="btn btn-danger deleteButton" type="button"  data-id="{{ $branchdata->id }}"><i class="fas fa-trash"></i></button>
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
                url: '{{ route('branch.destroy') }}',
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