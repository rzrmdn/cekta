<header class="main-header">
    <nav class="navbar">
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
            <li>
              <form class="navbar-form" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari ...">
                </div>
              </form>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu bg-green">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class=""> LOGIN <i class="fa fa-sign-in"></i></span>
              </a>
              <ul class="dropdown-menu">
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center btn btn-default">
                      <a href="{{url('/admin')}}"> Admin</a>
                    </div>
                    <div class="col-xs-4 text-center btn btn-default">
                      <a href="{{url('#')}}"> Dosen</a>
                    </div>
                    <div class="col-xs-4 text-center btn btn-default">
                      <a href="{{url('/student')}}"> Mahasiswa</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Silahkan Login</h3>
                  </div>
                  <!-- form start -->
                  <form class="form-horizontal">
                    <div class="box-body">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control" id="inputUsername" placeholder="Username/NIP/NIM">
                      </div><br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                      </div><br>
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </form>
                </div>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>