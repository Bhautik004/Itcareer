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
                <h1 class="m-0">Exam Schedule</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Exam Schedule</li>
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
                        <h3 class="card-title">Exam Schedule List</h3>
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
                                    <th>Name</th>
                                    <th>Student Login Id</th>
                                    <th>Course name</th>
                                    <th>Exam Password</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                              
                                    @foreach ($students as $studentsData)
                                        @php $count++;@endphp
                                        <tr>
                                            <td>{{$count}}</td>
                                            <td>{{$studentsData->register_no}}</td>
                                            @if(Auth::user()->role == 1)
                                            <td>
                                                {{ isset($studentsData->branchName->name) ? $studentsData->branchName->name : "Admin Branch" }}
                                            </td>
                                            @endif
                                            <td>
                                                {{$studentsData->f_name}} {{$studentsData->l_name}}
                                            </td>
                                           <td>{{$studentsData->examInfo->student_user_id}}</td> 
                                            <td>{{$studentsData->courseName->name}}</td>
                                            <td>{{$studentsData->examInfo->student_password}}</td>
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
