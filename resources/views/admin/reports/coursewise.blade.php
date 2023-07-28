@extends('admin.layouts.layout')
@section('content')


<?php
    $count = 0;
    // $studentsCreate = check_permission('Student','create');
    // $studentsEdit = check_permission('Student','edit');
    // $studentsDelete = check_permission('Student','destroy');
    // $studentsView = check_permission('Student','show');
    // $url =  url('/images');
    // $doc_url =  url('/Student_Education_Document');
?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Course Wise Students Details</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item active">Course Wise Students Details</li>
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
                    <div class="row">
                        <div class="col-md-1">
                              <h3 class="card-title">Course Wise Students List</h3>
                        </div>

                        <div class="col-md-2">
                        <div class="form-group">
                            <select class="form-control select2" id="employee-filter" style="width: 100%;" >
                                <option value="">Show All</option>
                                    @foreach ($courses as $value)
                                        <option value="{{ $value->name}}">{{ $value->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    </div>
                </div>
                    
                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="roles" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No.</th>
                      <th>Register Number</th>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Course</th>
                      <th>Register Date</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $studentsData)
                        @php $count++;@endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$studentsData->register_no}}</td>
                      <td>{{$studentsData->f_name}} {{$studentsData->l_name}}</td>
                      <td>{{$studentsData->email}}<br>{{$studentsData->phone}}<br>Date of Birth : {{$studentsData->dob}}</td>
                      <td>{{$studentsData->courseName->name}}</td>
                      <td>{{$studentsData['created_at']->format('d-m-Y')}}</td>
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

$("document").ready(function () {
  

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


  //Get a reference to the new datatable
  var table = $('#roles').DataTable();

  //Take the category filter drop down and append it to the datatables_filter div.
  //You can use this same idea to move the filter anywhere withing the datatable that you want.
  $("#filterTable_filter.dataTables_filter").append($("#employee-filter"));

  //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
  //This tells datatables what column to filter on when a user selects a value from the dropdown.
  //It's important that the text used here (Category) is the same for used in the header of the column to filter
  var categoryIndex = 0;
  $("#roles th").each(function (i) {
    if ($($(this)).html() == "Course") {
      categoryIndex = i; return false;
    }
  });

  //Use the built in datatables API to filter the existing rows by the Category column
  $.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
      var selectedItem = $('#employee-filter').val()
      var category = data[categoryIndex];
      if (selectedItem === "" || category.includes(selectedItem)) {
        return true;
      }
      return false;
    }
  );

  //Set the change event for the Category Filter dropdown to redraw the datatable each time
  //a user selects a new filter.
  $("#employee-filter").change(function (e) {
    table.draw();
  });

  table.draw();
});
@stop

