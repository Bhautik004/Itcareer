@extends('admin.layouts.layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit role</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Home</a></li>
            <li class="breadcrumb-item active">edit role</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Role</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('roles.update',$role->id)}}">
                    @csrf
                    @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Role Name</label>
                      <input type="text" name="role" class="form-control" value="{{ $role->role }}"  placeholder="Enter role name">
                      @if ($errors->has('role'))
                            <span class="text-danger">{{ $errors->first('role') }}</span>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input type="text" class="form-control" name="description"  value="{{ $role->description }}" placeholder="Description">
                      @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role Status</label>
                            <div class="d-flex">


                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="status" name="status" value="1"    {{ $role->status ==  1 ? 'checked' : '' }} >
                                <label class="form-check-label">Active</label>
                            </div>
                            <div class="form-check ml-2">
                                <input class="form-check-input" type="radio" id="status" name="status" value="0"
                                {{ $role->status ==  0 ? 'checked' : '' }} >
                                <label class="form-check-label">Deactive</label>
                            </div>
                        </div>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>


                  </div>
                  <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header bg-info">
                            <h3 class="card-title bg-info">Role Access</h3>

                            <div class="float-right">
                                <input type="checkbox" name="permission" class="form-check-input selectAllMasterController selectChildAll" data-text="master_module">
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row">
                            @foreach($get_all_action['master_module'] as $key => $acl_permissions)
                            <?php

				                $pId_master = \Illuminate\Support\Arr::pluck($acl_permissions['permission'],'id');

				                $containsSearch_master = count(array_intersect($pId_master, $module_permission)) == count($pId_master);

								?>

                            <div class="col-md-4">
                                <div class="card card-primary">
                                    <div class="card-header bg-info">
                                        <h3 class="card-title bg-info">{{$acl_permissions['name']}}</h3>
                                        <div class="float-right">
                                            <input type="checkbox" name="permission" class="selectChildAllMaster selectChildAll" data-id="{{$acl_permissions['id']}}" {{($containsSearch_master) ? 'checked':''}}>

                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="col-4">
                                            <!-- checkbox -->
                                            <div class="form-group">
                                                @foreach($acl_permissions['permission'] as $key1 => $methods)
                                                <div class="form-check">
                                                    <input class="form-check-input childInput childCheckBox{{$methods['resources_id']}}" data-id="{{$methods['resources_id']}}" data-txt="master_module" name="permission_id[]" type="checkbox"
                                                     value="{{$methods['id']}}" {{in_array($methods['id'], $module_permission) ?'checked':''}}>

                                                    <label class="form-check-label">{{ucfirst($methods['method'])}}</label>
                                                    @if ($errors->has('permission_id'))
                                                        <span class="text-danger">{{ $errors->first('permission_id') }}</span>
                                                    @endif
                                                </div>

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="row">



                        </div>

                    </div>
                </div>


                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('roles.index')}}"  class="btn btn-secondary bg-secondary">Cancel</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>





@stop
