@extends('admin.layouts.layout')
@section('content')

<?php
    $count = 0;
    $galleryCreate = check_permission('Gallery','create');
    $galleryEdit = check_permission('Gallery','edit');
    $galleryDelete = check_permission('Gallery','destroy');
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Gallery</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
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
                        <h3 class="card-title">Gallery </h3>

                        @if($galleryCreate == 1)
                        <div class="d-flex float-right">
                            <a href="{{route('gallery.create')}}">
                                <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add
                                    Photos</button>
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
                                    <th>Photo</th>
                                    @if($galleryEdit == 1 || $galleryDelete == 1)
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                @php $count++;@endphp
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>
                                        <img src="{{asset("gallery_img/$gallery->img_name")}}" alt="" height="100" width="100">
                                        
                                     </td>
                                    <td>
                                        @if($galleryEdit == 1)
                                        <a class="btn bg-primary" href="{{route('gallery.edit',$gallery['id'])}}"><i
                                                class="fas fa-edit"></i></a>
                                        @endif
                                        @if($galleryDelete == 1)
                                        <button class="btn btn-danger deleteButton" type="button"
                                            data-id="{{ $gallery->id }}"><i class="fas fa-trash"></i></button>
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
url: '{{ route('galleries.destroy') }}',
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