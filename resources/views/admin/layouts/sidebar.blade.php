<?php



$permissionData = DB::table('resourses')
    ->join('model_permissions', 'model_permissions.resources_id', '=', 'resourses.id')
    ->join('role_permissions', 'role_permissions.permission_id', '=', 'model_permissions.id')
    ->whereIn('resourses.is_parent', [1])
    // ->groupBy('resourses.name')
    ->get();

$master_permissions = '';
foreach ($permissionData as $perArr) {
    $check_permission = check_permission($perArr->name, $perArr->method);
    if ($check_permission == 1 && $perArr->is_parent == 1) {
        $master_permissions = 'true';
    }
}

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('assets/dist/img/logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">It Career Institute</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{-- <div class="image">
          <img src="{{asset('assets/dist/img/logo.png   ')}}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
            <div class="info">
                <a href="/" class="d-block ml-3" style="word-wrap: break-word;">Welcome ,
                    {{ Auth::user()->f_name }} </a>
                </span>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.home') }}"
                        class="nav-link {{ request()->segment(2) == 'home' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                @if ($master_permissions == 'true')
                    <li class="nav-item">
                        @if (check_permission('Role', 'index') == '1')
                            <a href="{{ route('roles.index') }}"
                                class="nav-link {{ request()->segment(2) == 'roles' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        @endif
                    </li>

                   

                    


                    
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

