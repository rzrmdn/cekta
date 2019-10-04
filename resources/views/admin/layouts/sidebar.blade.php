<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('adminlte/dist/img/reza.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Reza Ramadhan</p>
          <a href="#"><i class="fa fa-user"></i> Admin</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{url('/')}}">
            <i class="fa fa-home"></i><span> HOME</span>
          </a>
        </li>
        <li class="header">MENU</li>
        <li>
          <a href="{{url('/admin')}}">
          <i class="fa fa-dashboard"></i><span> Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin_mahasiswa')}}">
            <i class="fa fa-group"></i><span> Mahasiswa</span>
          </a>
        </li>
        <!-- <li>
          <a href="{{url('/admin_alumni')}}">
            <i class="fa fa-graduation-cap"></i><span> Alumni</span>
          </a>
        </li> -->
        <li>
          <a href="{{url('#')}}">
            <i class="fa fa-user-secret"></i><span> Dosen</span>
          </a>
        </li>
        <li>
          <a href="{{url('#')}}">
            <i class="fa fa-rss"></i><span> Pengumuman</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-book"></i><span> Status TA</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-folder"></i><span> Pedoman TA</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-file-text"></i><span> Petunjuk</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-question"></i><span> Help</span>
          </a>
        </li>
        <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i><span>Dasdads</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>