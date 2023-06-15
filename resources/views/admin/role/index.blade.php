@extends('admin.layouts.layout')

@section('content')

<?php
    $count = 0;
    $roleCreate = check_permission('Role','create');
    $roleEdit = check_permission('Role','edit');
    $roleDelete = check_permission('Role','destroy');
?>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Roles</h1>
        </div>



        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="breadcrumb-item active">Role</li>
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
                  <h3 class="card-title">Role List</h3>

                  @if($roleCreate == 1)
                  <div class="d-flex float-right">
                    <a href="{{route('roles.create')}}">
                    <button type="button" class="btn btn-block btn-success"> <i class="fa fa-plus"></i> Add Role</button>
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
                      <th>Role Name</th>
                      <th>Status</th>
                      @if($roleEdit == 1 || $roleDelete == 1)
                        <th>Action</th>
                      @endif
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $roledata)
                        @php $count++;@endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$roledata->role}}</td>
                      <td>
                        <span class="badge {{$roledata->status == 1 ? "bg-success" : "bg-danger"}}" >{{
                       $roledata->status == 1 ? "Active" : "Deactive" }}</span></td>
                      @if($roleEdit == 1 || $roleDelete == 1)
                      <td>

                        <form action="{{ route('roles.destroy', $roledata->id)}}" method="post">
                           @if($roleEdit == 1)
                                <a class="btn bg-primary" href="{{route('roles.edit',$roledata->id)}}"><i class="fas fa-edit"></i></a>
                            @endif
                            @csrf
                            @method('DELETE')
                            @if($roleDelete == 1)
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            @endif
                        </form>
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

@stop
@section('script')
$("#roles").DataTable({
    "responsive": true,
    "lengthChange": false,
    "columnDefs": [
        { width: 20, targets: 0, "className": "text-center", },
        { width: 210, targets: 3 }
    ],
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#roles_wrapper .col-md-6:eq(0)');
@endsection
