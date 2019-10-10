@extends('admin.layouts.main')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <h1>Data Mahasiswa</h1>
        <br>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mahasiswa</li>
      </ol>
    </section>
    <div class="box">
    <!-- Tambah Data -->
      <div class="box-header">
        <div class="box-title mx-auto">
        <!-- data-toggle="modal" data-target="#modal_students" -->
          <a href="/admin_mahasiswa/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
          <a type="button" class="btn btn-default" data-toggle="modal" data-target="#"><i class="fa fa-file-text-o"></i> Import</a>
          <a type="button" class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-file-excel-o"></i> Export Excel</a>
          <a type="button" class="btn btn-adn" data-toggle="modal" data-target="#"><i class="fa fa-file-pdf-o"></i> Export PDF</a>
        </div>
        @if (session('status'))
          <div class="bg-success">
            {{ session('status') }}
          </div>
        @endif
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Angkatan</th>
                <th>SKS</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($student as $mhs)
              <tr>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nim}}</td>
                <td>{{$mhs->angkatan}}</td>
                <td>{{$mhs->sks}}</td>
                <td>{{$mhs->keterangan}}</td>
                <td>
                  <a href="/admin_mahasiswa/{{ $mhs->id }}" data-toggle="modal" data-target="#modal_students_show" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Detail</a>
                  <a href="/admin_mahasiswa/edit/{{ $mhs->id }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                  <form action="/admin_mahasiswa/{{$mhs->id}}" class="inline" method="post"> 
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Angkatan</th>
                <th>SKS</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

  <!-- Modal Show Data-->
  <div class="modal fade" id="modal_students_show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Detail Data Mahasiswa</h4>
          </div>
          <div class="modal-body">
              <table class="table">
              <tr>
                  <th>Nama Lengkap</th>
              </tr>
              <tr>
                  <td>NIM</td>
                  <td>1610817210015</td>
              </tr>
              <tr>
                  <td>Nama Lengkap</td>
                  <td>Nama Lengkap</td>
              </tr>
              <tr>
                  <td>Nama Lengkap</td>
                  <td>Nama Lengkap</td>
              </tr>
              </table>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
          </div>
          </div>
      </div>
  </div>
</div>
@endsection
