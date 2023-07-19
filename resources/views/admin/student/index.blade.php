@extends('admin.layouts.layout')
@section('content')


<?php
    $count = 0;
    $studentsCreate = check_permission('Student','create');
    $studentsEdit = check_permission('Student','edit');
    $studentsDelete = check_permission('Student','destroy');
    $studentsView = check_permission('Student','show');
    $studentsVerify = check_permission('Student','verifyStudent');
    $url =  url('/images');
    $doc_url =  url('/Student_Education_Document');
?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Students</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item active">Students</li>
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
                  <h3 class="card-title">Students List</h3>

                   @if($studentsCreate == 1)
                  <div class="d-flex float-right" style="margin-left: 10px;">
                    <a href="{{route('students.create')}}">
                    <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add Students</button>
                    </a>
                  </div>
                  @endif

                  <div class="d-flex float-right" >
                    <form action="{{ route('admin.import')}}" method="post" enctype="multipart/form-data">
                       @csrf
                       <fieldset>
                           <label>Select File to Upload  <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or .xls) files')}}</small></label>
                           <div class="input-group">
                               <input type="file" required class="form-control" name="select_file" id="select_file">
                               @if ($errors->has('select_file'))
                                   <p class="text-right mb-0">
                                       <small class="danger text-muted" id="file-error">{{ $errors->first('select_file') }}</small>
                                   </p>
                               @endif
                               <div class="input-group-append" id="button-addon2">
                                   <button class="btn btn-primary square" type="submit"><i class="ft-upload mr-1"></i> Upload</button>
                               </div>
                           </div>
                       </fieldset>
                   </form>
                  </div>

                 

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="roles" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No.</th>
                      <th>Register Number</th>
                        @if(Auth::user()->role == 1)
                            <th>Center Name</th>
                        @endif
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Course name</th>
                      <th>Status</th>

                      @if($studentsEdit == 1 || $studentsDelete == 1)
                        <th>Action</th>
                      @endif
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $studentsData)
                        @php $count++;@endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$studentsData->register_no}}</td>
                        @if(Auth::user()->role == 1)
                        <td>{{$studentsData->branchName->name}}</td>
                        @endif
                      <td>
                        @if($studentsData->profile_pic)
                        <img class="direct-chat-img mr-3 frame"  src="{{$url}}{{'/'.$studentsData->profile_pic}}"alt="Message User Image">
                        @elseif($studentsData->gender == 'f')
                        <img class="direct-chat-img mr-3 frame"  src="{{asset('images/female.png')}}"alt="Message User Image">
                        @else
                        <img class="direct-chat-img mr-3 frame"  src="{{asset('images/male.png')}}"alt="Message User Image">

                        @endif
                      </td>
                      <td >
                        {{$studentsData->f_name}} {{$studentsData->l_name}}
                     </td>
                     <td>{{$studentsData->email}}<br>{{$studentsData->phone}}<br>Date of Birth : {{$studentsData->dob}}
                        </td>
                        <td>{{$studentsData->courseName->name}}</td>
                      <td>
                        <a href="JavaScript:void(0)" class="badge {{$studentsData->status == 1 ? "bg-success" : "bg-danger"}} activebtn"
                        data-id="{{ $studentsData->id }}"  data-status="{{$studentsData->status}}">{{
                        $studentsData->status == 1 ? "Active" : "Deactive" }}</a>

                    </td>
                      @if($studentsEdit == 1 || $studentsDelete == 1)
                      <td>
                            <a class="btn bg-info " href="{{route('student.download',['id'=>Crypt::encryptString($studentsData->id)])}}" ><i class="fas fa-download" style='color: white'></i></a>

                            @if($studentsView == 1)
                                <a class="btn bg-warning showprofile" href="JavaScript:void(0)" data-id="{{$studentsData->id}}" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-eye" style='color: white'></i></a>
                            @endif
                            @if($studentsEdit == 1)
                                <a class="btn bg-primary" href="{{route('students.edit',$studentsData->id)}}"><i class="fas fa-edit"></i></a>
                            @endif

                            @if($studentsDelete == 1)
                                <button class="btn btn-danger deleteButton"  data-id="{{ $studentsData->id }}" type="submit"><i class="fas fa-trash"></i></button>
                            @endif
                            @if($studentsVerify == 1 &&  $studentsData->verify_status == 0)
                            <button class="btn btn-success verifyButton" data-id="{{ $studentsData->id }}" data-branchId="{{ $studentsData->branch_id}}" data-toggle="modal" data-target="#modal-verify"><i
                                class="fas fa-check"></i></button>
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
          <h4 class="modal-title">User Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                        <h4 class="modal-title">Personal Details</h4>
                    <b><p>Register No :</b> <span id="register_no"></span> </p>
                    <b><p>Name :</b> <span id="name"></span> </p>
                    <b><p>Email Id :</b> <span id="email_id"></span></p>
                    <b><p>Phone No :</b> <span id="phone_no"></span></p>
                    <b><p>Address :</b> <span id="current_add"></span></p>
                    <b><p>State :</b> <span id="state"></span></p>
                    <b><p>City :</b> <span id="city"></span></p>
                    <b><p>Pincode :</b> <span id="pincode"></span></p>
                    <b><p>Date Of Birth :</b> <span id="dob"></span></p>
                    <b><p>Gender :</b> <span id="gender"></span></p>
                </div>
                {{-- <div class="col-md-6">
                
                    <h4 class="modal-title">Student Education</h4>
                    <b><p>Last Qualification :</b> <span id="last_qualification"></span></p>
                    <b><p>Last University Name :</b> <span id="university_name"></span></p>
                    <b><p>Last Qualification CGPA :</b> <span id="qualification_cgpa"></span></p>

                    <h4 class="modal-title">Employee Login Information</h4>
                    <b><p>Username :</b> <span id="username"></span></p>
                    <b><p>Password :</b> <span id="Students_password"></span></p>
                   
                    <h4 class="modal-title">Employee Documents</h4>
                    <ul>


                         <li id="aadhar_card"><a  href="" target="_blank">Aadhaar Card</a></li>
                         <li id="pan_card"><a  href="" target="_blank">Pan Card</a></li>
                         <li id="qualification_certificate"><a  href="" target="_blank">Qualification Certificate</a></li>
                         <li id="experience_certificate"><a  href="" target="_blank">Work Experience Letter</a></li>
                         <li id="experience_reliving"><a  target="_blank" href="">Work Experience reliving</a></li>
                         <li id="experience_salaryslip"><a  href="" target="_blank">Work Experience Salaryslip</a></li>
                         <li id="notice">Document Not Submited !!</li>


                     </ul>


                </div> --}}
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
</div>


<div class="modal fade" id="modal-verify">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Student Verify</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('student.verifyStudent')}}">
          @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <img src="/qr/qr.png" alt="..." class="img-thumbnail" width="200" height="200">
            </div>
          </div>
          <div class="col-md-6">
            <p> Count Fees to pay for Without Material as...</p>
            <p> Rs. 300/- per Student for CCC Course</p>
            <p> Rs. 500/- per Student for Typing Course</p>
            <p> Rs. 1000/- per Student for 6 , 9, 12, Month Course</p>
            <input type="hidden" name="student_id" value="" id="student_id">
            <input type="hidden" name="branch_id" value="" id="branch_id">
           <input type="text" class="form-control" name="trx_no" placeholder="Enter Transaction Number" value="{{ old('trx_no') }}"
              required>

            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-default" >Submit</button>
            </div>
          </div>
        </div>
        </form>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
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
        url: '{{ route('student.destroy') }}',
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
        var url = '{{ route("students.show", ":id") }}';
        url = url.replace(':id',id);
        e.preventDefault();
            $.ajax({
                url: url,
                type:'GET',
                data:{id:id},
                success: function(data) {
                    var name = data.user.f_name +" "+ data.user.m_name +" "+ data.user.l_name ;
                    var email_id =data.user.email;
                    var register_no =data.user.register_no;
                    var phone_no = data.user.phone;
                    var current_add = data.user.address;
                    var state = data.user.state_name.name;
                    var city = data.user.city_name.name;
                    var pincode = data.user.pincode;
                    var DOB = data.user.dob;
                    var gender = data.user.gender;
                    if(gender == "m"){
                        gender = "Male";
                    }else{
                        gender = "Female";
                    }
                    
                    

                    $('#register_no').text(register_no);
                    $('#name').text(name);
                    $('#email_id').text(email_id);
                    $('#phone_no').text(phone_no);
                    $('#current_add').text(current_add);
                    $('#dob').text(DOB);
                    $('#state').text(state);
                    $('#city').text(city);
                    $('#pincode').text(pincode);
                    $('#gender').text(gender);
                },

            });
    });


    $(document).on('click', '.verifyButton', function(e){

    var id = $(this).data('id');
    var branch_id = $(this).data('branchId');
    $('#student_id').val(id);
    $('#branch_id').val(branch_id);

    
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
                    url: '{{ route('students.deactive') }}',
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
                url: '{{ route('students.deactive') }}',
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
                    url: "{{route('students.deactive')}}",
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

