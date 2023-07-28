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

                    <li class="nav-item">
                        @if (check_permission('Branch', 'index') == '1')
                            <a href="{{ route('branchs.index') }}"
                                class="nav-link {{ request()->segment(2) == 'branchs' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Branch</p>
                            </a>
                        @endif
                    </li>


                    <li class="nav-item">
                        @if (check_permission('Manager', 'index') == '1')
                            <a href="{{ route('managers.index') }}"
                                class="nav-link {{ request()->segment(2) == 'managers' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Managers</p>
                            </a>
                        @endif
                    </li>

                    <li class="nav-item">
                        @if (check_permission('Course', 'index') == '1')
                            <a href="{{ route('courses.index') }}"
                                class="nav-link {{ request()->segment(2) == 'courses' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Courses</p>
                            </a>
                        @endif
                    </li>

                    <li class="nav-item">
                        @if (check_permission('franchise', 'index') == '1')
                            <a href="{{ route('franchises.index') }}"
                                class="nav-link {{ request()->segment(2) == 'franchises' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Franchises Enquiry</p>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (check_permission('studentEnquiry', 'index') == '1')
                            <a href="{{ route('studentenquirys.index') }}"
                                class="nav-link {{ request()->segment(2) == 'studentenquirys' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Students Enquiry</p>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (check_permission('gallery', 'index') == '1')
                        <a href="{{ route('gallery.index') }}"
                            class="nav-link {{ request()->segment(2) == 'gallery' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Gallery</p>
                        </a>
                        @endif
                    </li>

                    

                    <li class="nav-item {{ request()->segment(2) == 'students' ? 'menu-open' : '' }} {{ request()->segment(2) == 'studentadmissions' ? 'menu-open' : '' }} {{ request()->segment(2) == 'onDemandExams' ? 'menu-open' : '' }} {{ request()->segment(2) == 'studentVerify' ? 'menu-open' : '' }} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>Entry Form<i class="fas fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">        
                            <li class="nav-item">
                                @if (check_permission('Student', 'index') == '1')
                                    <a href="{{ route('students.index') }}"
                                        class="nav-link {{ request()->segment(2) == 'students' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Student</p>
                                    </a>
                                @endif
                            </li>

                            <li class="nav-item">
                                @if (check_permission('studentAdmission', 'index') == '1')
                                    <a href="{{ route('studentadmissions.index') }}"
                                        class="nav-link {{ request()->segment(2) == 'studentadmissions' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Students Admission</p>
                                    </a>
                                @endif
                            </li>

                            <li class="nav-item">
                                @if (check_permission('onDemandExam', 'index') == '1')
                                    <a href="{{ route('onDemandExams.index') }}"
                                        class="nav-link {{ request()->segment(2) == 'onDemandExams' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>On Demand Exam Form</p>
                                    </a>
                                @endif
                            </li>

                            <li class="nav-item">
                                @if (check_permission('Student', 'verifyStudentList') == '1')
                                <a href="{{ route('student.verifyStudentList') }}"
                                    class="nav-link {{ request()->segment(2) == 'studentVerify' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Verify Students</p>
                                </a>
                                @endif
                            </li>

                            <li class="nav-item">
                                @if (check_permission('Student', 'examSchedule') == '1')
                                <a href="{{ route('student.examSchedule') }}"
                                    class="nav-link {{ request()->segment(2) == 'examSchedule' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Exam Schedule</p>
                                </a>
                                @endif
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item  {{ request()->segment(2) == 'reports' ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>Reports<i class="fas fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">        
                            <li class="nav-item">
                                @if (check_permission('Reports', 'courseWiseReports') == '1')
                                    <a href="{{ route('reports.courseWiseReports') }}"
                                        class="nav-link {{ request()->segment(3) == 'course' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Course Wise Students</p>
                                    </a>
                                @endif
                            </li>
                            <li class="nav-item">
                                @if (check_permission('Reports', 'durationWiseReports') == '1')
                                    <a href="{{ route('reports.durationWiseReports') }}"
                                        class="nav-link {{ request()->segment(3) == 'duration' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Duration Wise Students</p>
                                    </a>
                                @endif
                            </li>
                           
                        </ul>
                    </li>

                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

