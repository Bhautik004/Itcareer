@extends('admin.layouts.layout')
@section('content')

<?php
    $count = 0;
    $franchiseCreate = check_permission('franchise','create');
    $franchiseEdit = check_permission('franchise','edit');
    $franchiseDelete = check_permission('franchise','destroy');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Franchise Apllications</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Franchise</li>
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
                        <h3 class="card-title">Franchise Form List</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="leads" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Prop Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Center Name</th>
                                <th>Center Address</th>
                                <th>Reference By</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($franchises as $franchiseData)
                            @php $count++;@endphp
                            <tr>
                              <td>{{$count}}</td>
                              <td>{{ $franchiseData['prop_name'] }} </td>
                              <td>{{ $franchiseData['email'] }}</td>
                              <td>{{ $franchiseData['phone'] }}</td>
                              <td>{{ $franchiseData['center_name'] }}</td>
                              <td>Address : {{ $franchiseData['center_address'] }}
                                <br>State : {{$franchiseData->stateName->name}}<br>City : {{$franchiseData->cityName->name}} <br>Pincode : {{$franchiseData['pincode']}} 
                                </td>
                              <td>{{ $franchiseData['ref_by'] }}</td>

                               <td>
                                <a href="JavaScript:void(0)" class="badge {{$franchiseData->status == 1 ? "bg-success" : "bg-danger"}} activebtn"
                                data-id="{{ $franchiseData->id }}"  data-status="{{$franchiseData->status}}">{{
                                $franchiseData->status == 1 ? "Active" : "Deactive" }}</a>

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