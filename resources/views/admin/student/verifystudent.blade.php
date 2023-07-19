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
                <h1 class="m-0">Verify Students</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Verify Students</li>
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
                        <h3 class="card-title">Verify Students List</h3>

                     

                        



                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{route('student.generatePassword')}}" method="POST">
                            @csrf
                        <table id="roles" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.
                                        <input type="checkbox" id="selectAll" />
                                    </th>
                                    <th>Register Number</th>
                                    @if(Auth::user()->role == 1)
                                        <th>Center Name</th>
                                    @endif
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Course name</th>
                                    <th>Status</th>
                                    <th>Transaction Number</th>
                                    <th>Transaction Date</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                              
                                    @foreach ($students as $studentsData)
                                        @php $count++;@endphp
                                        <tr>
                                            <td>{{$count}}
                                            <input type="checkbox" id="{{$studentsData->id}}" name="selected[]" value="{{$studentsData->id}}" />
                                            </td>
                                            <td>{{$studentsData->register_no}}</td>
                                            @if(Auth::user()->role == 1)
                                            <td>{{$studentsData->branchName->name}}</td>
                                            @endif
                                            <td>
                                                @if($studentsData->profile_pic)
                                                <img class="direct-chat-img mr-3 frame"
                                                    src="{{$url}}{{'/'.$studentsData->profile_pic}}" alt="Message User Image">
                                                @elseif($studentsData->gender == 'f')
                                                <img class="direct-chat-img mr-3 frame" src="{{asset('images/female.png')}}"
                                                    alt="Message User Image">
                                                @else
                                                <img class="direct-chat-img mr-3 frame" src="{{asset('images/male.png')}}"
                                                    alt="Message User Image">

                                                @endif
                                            </td>
                                            <td>
                                                {{$studentsData->f_name}} {{$studentsData->l_name}}
                                            </td>
                                            <td>{{$studentsData->email}}<br>{{$studentsData->phone}}<br>Date of Birth :
                                                {{$studentsData->dob}}
                                            </td>
                                            <td>{{$studentsData->courseName->name}}</td>
                                            <td>
                                                <a href="JavaScript:void(0)" class="badge {{$studentsData->status == 1 ? "
                                                    bg-success" : "bg-danger" }} activebtn" data-id="{{ $studentsData->id }}"
                                                    data-status="{{$studentsData->status}}">{{
                                                    $studentsData->status == 1 ? "Active" : "Deactive" }}</a>
                                            </td>
                                            <td>
                                                {{$studentsData->verifyInfo->trx_no}}
                                            </td>
                                            <td>
                                                {{$studentsData->verifyInfo->trx_date}}
                                            </td>
                                        
                                        </tr>
                                    @endforeach
                                    {{-- <input type="submit" value="Submit"> --}}

                                   
                            </tbody>
                        </table>
                        <button class="btn btn-primary square" type="submit">Submit</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('script')
$('#selectAll').click(function(e){
var table= $(e.target).closest('table');
$('td input:checkbox',table).attr('checked',e.target.checked);
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
