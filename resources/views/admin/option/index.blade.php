@extends('admin.layouts.layout')
@section('content')

<?php
    $count = 0;
    $OptionCreate = check_permission('Option','create');
    $OptionEdit = check_permission('Option','edit');
    $OptionDelete = check_permission('Option','destroy');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Option List</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Option</li>
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
                        <h3 class="card-title">Option List</h3>

                        @if($OptionCreate == 1)
                        <div class="d-flex float-right">
                            <a href="{{route('options.create')}}">
                                <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add
                                    Option</button>
                            </a>
                        </div>
                        @endif


                        <div class="d-flex float-right">
                            <form action="{{ route('admin.option.import')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <label>Select File to Upload <small class="warning text-muted">{{__('Please upload only Excel (.xlsx or
                                            .xls) files')}}</small></label>
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
                        <table id="leads" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Questions</th>
                                    <th>Options</th>
                                    <th>point</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($options as $optionsdata)
                                @php $count++;@endphp
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{ $optionsdata->question->question }} </td>
                                    <td>{{ $optionsdata['options'] }} </td>
                                    <td>{{ $optionsdata['points'] }} </td>
                                   
                                    
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
url: '{{ route('opt.destroy') }}',
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