@extends('admin.layouts.main')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <center><h1>
        Sistem Informasi Monitoring Tugas Akhir<br>
        <small>Program Studi S-1 Teknik Sipil Universitas Lambung Mangkurat</small>
      </h1></center><br>
    </section>
      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Mahasiswa</span>
                <span class="info-box-number">675</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-graduation-cap"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Alumni</span>
                <span class="info-box-number">199</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-user-secret"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Dosen</span>
                <span class="info-box-number">36</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="fa fa-pencil"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Sedang TA</span>
                <span class="info-box-number">100</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        Konten
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
          Konten
            <!-- Custom tabs (Charts with tabs)-->
            <!-- /.box -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
          Konten
            <!-- /.box -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </section>
      <!-- /.content -->
@endsection