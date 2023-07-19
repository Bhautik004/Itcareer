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
        <h1 class="m-0">Duration Wise Students Details</h1>
      </div>
      <!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
          <li class="breadcrumb-item active">Duration Wise Students Details</li>
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
                <h3 class="card-title">Duration Wise Students List</h3>
              </div>
             <div class="col-md-4">
              
                <input type="text" name="date" class="form-control" placeholder="Please Select Date" id="reportrange_val">
              </div>
              
              <div class="col-md-4">
              
                <div class="input-group">
                  <button type="button" class="btn btn-default float-right" id="reportrange">
                    <i class="far fa-calendar-alt"></i> Date range picker
                    <i class="fas fa-caret-down"></i>
                  </button>
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
                  <td>{{$studentsData->email}}<br>{{$studentsData->phone}}<br>Date of Birth : {{$studentsData->dob}}
                  </td>
                  <td>{{$studentsData->courseName->name}}</td>
                  <td>{{$studentsData->created_at->format('Y-m-d')}}</td>
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
  
  $(".daterangepicker > .range > ul > li:nth-child(2)").addClass("active");
  
  $(function() {

    var start = moment();
    var end = moment("2023-12-31 10:08:07");
    
    function cb(start, end) {
      $('#reportrange span').html(start.format('DD-MM-YYYY') + ' - ' + end.format('DD-MM-YYYY'));
    }
    
    $('#reportrange').daterangepicker({
      startDate: start,
      endDate: end,
      "autoUpdateInput": true,
      ranges: {
      'Today': [moment(), moment()],
      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month': [moment().startOf('month'), moment().endOf('month')],
      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    },
      function(start, end, label) {
        $('#reportrange_val').val(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'))
      }
    );
  });
  
  
  $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
    var start = picker.startDate;
    var end = picker.endDate;
  
  
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
          var min = start;
          var max = end;
          var startDate = new Date(data[5]);
        
          if (min == null && max == null) {
            return true;
          }
          if (min == null && startDate <= max) { return true; } if (max==null && startDate>= min) {
            return true;
          }
          if (startDate <= max && startDate>= min) {
            return true;
          }
          return false;
        }
    );
    
      table.draw();
      $.fn.dataTable.ext.search.pop();
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

    var table = $('#roles').DataTable();
});
@stop
