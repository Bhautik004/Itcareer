@extends('admin.layouts.layout')
@section('content')


<?php
    $count = 0;
    $managersCreate = check_permission('Manager','create');
    $managersEdit = check_permission('Manager','edit');
    $managersDelete = check_permission('Manager','destroy');
    $managersView = check_permission('Manager','show');
   
?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Managers</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item active">Managers</li>
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
                  <h3 class="card-title">Managers List</h3>

                  @if($managersCreate == 1)
                  <div class="d-flex float-right">
                    <a href="{{route('managers.create')}}">
                    <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add Managers</button>
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
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Branch name</th>
                      <th>Status</th>

                      @if($managersEdit == 1 || $managersDelete == 1)
                        <th>Action</th>
                      @endif
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($managers as $managersData)
                        @php $count++;@endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$managersData->f_name}} {{$managersData->l_name}}</td>
                     <td>{{$managersData->email}}<br>{{$managersData->phone}}<br>Date of Birth : {{$managersData->dob}}
                        </td>
                        <td>{{$managersData->branchs->name}}</td>
                      <td>
                        <a href="JavaScript:void(0)" class="badge {{$managersData->status == 1 ? "bg-success" : "bg-danger"}} activebtn"
                        data-id="{{ $managersData->id }}"  data-status="{{$managersData->status}}">{{
                        $managersData->status == 1 ? "Active" : "Deactive" }}</a>

                    </td>
                      @if($managersEdit == 1 || $managersDelete == 1)
                      <td>

                            @if($managersView == 1)
                                <a class="btn bg-warning showprofile" href="JavaScript:void(0)" data-id="{{$managersData->id}}" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-eye" style='color: white'></i></a>
                            @endif
                           @if($managersEdit == 1)
                                <a class="btn bg-primary" href="{{route('managers.edit',$managersData->id)}}"><i class="fas fa-edit"></i></a>
                            @endif

                            @if($managersDelete == 1)
                                <button class="btn btn-danger deleteButton"  data-id="{{ $managersData->id }}" type="submit"><i class="fas fa-trash"></i></button>
                            @endif

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
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Manager Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                        <h4 class="modal-title">Personal Details</h4>
                    <b><p>Name :</b> <span id="name"></span> </p>
                    <b><p>Email Id :</b> <span id="email_id"></span></p>
                    <b><p>Phone No :</b> <span id="phone_no"></span></p>
                    <b><p>Address :</b> <span id="current_add"></span></p>
                    <b><p>State :</b> <span id="state"></span></p>
                    <b><p>City :</b> <span id="city"></span></p>
                    <b><p>Pincode :</b> <span id="pincode"></span></p>
                    <b><p>Date Of Birth :</b> <span id="dob"></span></p>
                    <b><p>Gender :</b> <span id="gender"></span></p>
                    <b><p>Branch :</b> <span id="branch"></span></p>
                </div>
               
            </div>


        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


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
        url: '{{ route('manager.destroy') }}',
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


    $(document).on('click', '.showprofile', function(e){
        var id = $(this).data('id');
        var url = '{{ route("managers.show", ":id") }}';
        url = url.replace(':id',id);
        e.preventDefault();
            $.ajax({
                url: url,
                type:'GET',
                data:{id:id},
                success: function(data) {
                    var name = data.user.f_name +" "+ data.user.m_name +" "+ data.user.l_name ;
                    var email_id =data.user.email;
                    var phone_no = data.user.phone;
                    var current_add = data.user.address;
                    var state = data.user.state_name.name;
                    var city = data.user.city_name.name;
                    var pincode = data.user.pincode;
                    var DOB = data.user.dob;
                    var branch = data.user.branchs.name;
                    var gender = data.user.gender;
                    if(gender == "m"){
                        gender = "Male";
                    }else{
                        gender = "Female";
                    }
                    
                    

                    $('#name').text(name);
                    $('#email_id').text(email_id);
                    $('#phone_no').text(phone_no);
                    $('#current_add').text(current_add);
                    $('#dob').text(DOB);
                    $('#state').text(state);
                    $('#city').text(city);
                    $('#pincode').text(pincode);
                    $('#gender').text(gender);
                    $('#branch').text(branch);
                },

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
                    url: '{{ route('managers.deactive') }}',
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
                url: '{{ route('managers.deactive') }}',
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




    $(document).ready(function() {

        $('.btn_changepermission').bootstrapSwitch({size : 'small'});
        $('.btn_changepermission').bootstrapSwitch('state');
        var stopchange = false;


        $('.btn_changepermission').on('switchChange.bootstrapSwitch', function (e, state) {
            var obj = $(this);
            var token = $("meta[name='csrf-token']").attr("content");
            if(stopchange === false){
                $.ajax({
                    url: "{{route('managers.deactive')}}",
                    dataType: 'json',
                    type: "POST",
                    quietMillis: 100,
                    data: {
                        _token:token,
                        id: $(this).data('id'),
                    },
                    success: function(response) {
                        testing = true;
                        toastr.options =
                                {
                                    "showDuration": "2000",
                                    "hideDuration": "2000",
                                    "timeOut": "2000",
                                    "extendedTimeOut": "2000",
                                    "positionClass": "toast-top-center",
                                };
                        toastr.success(response.success);
                        {{-- location.reload(); --}}
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

