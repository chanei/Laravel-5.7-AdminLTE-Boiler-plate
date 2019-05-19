<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>

        <li class="{{ Request::is('audittrails') ? 'active' : '' }}">
            <a href="{{ url('audittrails') }}">
                <i class="fa fa-th"></i> <span>Audit Trails</span>
            </a>
        </li>

        <li class="treeview {{ Request::is('users') || Request::is('users/create') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('users') ? 'active' : '' }}"><a href="{{url('users')}}"><i class="fa fa-circle-o"></i>All Users</a></li>
            <li class="{{ Request::is('users/create') ? 'active' : '' }}"><a href="{{action('UserController@create')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
          </ul>
        </li>

        <li class="treeview {{ Request::is('forms') || Request::is('advancedforms') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('forms') ? 'active' : '' }}"><a href="{{url('forms')}}"><i class="fa fa-circle-o"></i>General Form Elements</a></li>
            <li class="{{ Request::is('advancedforms') ? 'active' : '' }}"><a href="{{url('advancedforms')}}"><i class="fa fa-circle-o"></i> Advanced Forms</a></li>
          </ul>
        </li>

        <li class="treeview {{ Request::is('simpletables') || Request::is('datatables') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('simpletables') ? 'active' : '' }}"><a href="{{ url('simpletables') }}"><i class="fa fa-circle-o"></i> Simple Tables</a></li>
            <li class="{{ Request::is('datatables') ? 'active' : '' }}"><a href="{{ url('datatables') }}"><i class="fa fa-circle-o"></i> Datatables</a></li>
          </ul>
        </li>

        <li class="treeview {{ Request::is('export') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-download"></i>
            <span>Export</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('export') ? 'active' : '' }}"><a href="{{ url('export') }}"><i class="fa fa-circle-o"></i> Export Users</a></li>
        </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
