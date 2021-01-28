<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text  font-weight-bold">KATREENA'S RENTAL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Request::routeIs('dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('boarder') }}" class="nav-link {{ Request::routeIs('boarder') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                BOARDERS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('room') }}" class="nav-link {{ Request::routeIs('room') ? 'active' : ''}}">
              <i class="nav-icon fas fa-house-user"></i>
              <p>
                ROOMS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('appliance') }}" class="nav-link {{ Request::routeIs('appliance') ? 'active' : ''}}">
              <i class="nav-icon fas fa-box"></i>
              <p>
                APPLIANCES
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logs') }}" class="nav-link {{ Request::routeIs('logs') ? 'active' : ''}}">
              <i class="nav-icon fas fa-scroll"></i>
              <p>
                LOGS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('payments') }}" class="nav-link {{ Request::routeIs('payments') ? 'active' : ''}}">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>
                PAYMENTS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user') }}" class="nav-link {{ Request::routeIs('user') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                USERS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="nav-link hover:bg-gray-50 hover:text-dark"  onclick="event.preventDefault();
            this.closest('form').submit();" >
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                SIGN-OUT
              </p>
            </a>
            </form>
          </li>

        </ul>

        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>