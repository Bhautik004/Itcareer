
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Notifications Dropdown Menu -->

      
      

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">

        <label>
            Welcome, {{Auth::user()->f_name}}
        </label>
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

          <a href="{{ route('users.viewProfile',['id' => auth()->user()->id])}}" class="dropdown-item">
            <i class="fa fa-user mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>


          <a href="{{ route('home') }}" class="dropdown-item"
                                onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                   <i class="fa-solid fa-right-from-bracket mr-2"></i>Logout</a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
        </div>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->
