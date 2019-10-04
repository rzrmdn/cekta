<header class="main-header">
    <nav class="navbar navbar-static-top" >
      <div class="container">
        <div class="navbar-header">
          <a href="{{url('/')}}" class="navbar-brand">
            <span class="logo-lg"><img src="{{url('adminlte/dist/img/ulm.png')}}" width="23" height="23"><b> cekTA</b> PSTS</span>
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pedoman TA <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Download Pedoman Penulisan TA</a></li>
                <li class="divider"></li>
                <li><a href="#">Download Prosedur TA</a></li>
                <li class="divider"></li>
                <li><a href="#">Download Workshop TA</a></li>
              </ul>
            </li>  
            <li><a href="#">Topik TA</a></li>
            <li><a href="#">Pencarian TA</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sidang <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Sidang Proposal</a></li>
                <li class="divider"></li>
                <li><a href="#">Sidang TA</a></li>
              </ul>
            </li>
            <!-- <li><a href="#">Link <span class="sr-only">(current)</span></a></li> --> 
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari ...">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{url('adminlte/dist/img/reza.jpg')}}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Reza Ramadhan</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{url('adminlte/dist/img/reza.jpg')}}" class="img-circle" alt="User Image">

                  <p>
                    Reza Ramadhan - Web Programmer
                    <small>Teknologi Informasi</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="http://instagram.com/rz_rmdn" target="blank" > Instagram</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="http://steamcommunity.com/rz_rmdn" target="blank" > Steam</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="http://facebook.com/rz.rmdn" target="blank" > Facebook</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="{{url('/admin')}}"> Admin</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="{{url('/lecuter')}}"> Dosen</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="{{url('/student')}}"> Mahasiswa</a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>