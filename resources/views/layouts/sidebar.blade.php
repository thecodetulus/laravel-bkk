<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('/AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview menu-open">
          <a href="{{ url('alumni.index') }}">
            <i class="fa fa-graduation-cap"></i> <span>Alumni</span>
          </a>
        </li>
        <li class="active treeview menu-open">
          <a href="{{ url('/mitra') }}">
            <i class="fa fa-building-o"></i> <span>Mitra</span>
          </a>
        </li>
        <li class="active treeview menu-open">
          <a href="{{ url('/jurusan') }}">
            <i class="fa fa-graduation-cap"></i> <span>Jurusan</span>
          </a>
        </li>
        <li class="active treeview menu-open">
          <a href="{{ url('/lowongan') }}">
            <i class="fa fa-briefcase"></i> <span>Lowongan</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>