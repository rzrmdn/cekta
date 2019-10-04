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
        <h1 class="box-title">
        <!-- data-toggle="modal" data-target="#modal_students" -->
          <a href="/admin_mahasiswa/create" class="btn btn-primary" ><i class="fa fa-plus"></i> Tambah</a>
        </h1>
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
                <!-- data-toggle="modal" data-target="#modal_students_edit"  -->
                  <a href="/admin_mahasiswa/{{ $mhs->id }}" data-toggle="modal" data-target="#modal_students_show" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Detail</a>
                  <a href="/admin_mahasiswa/edit/{{ $mhs->id }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                  <form action="{{$mhs->id}}" class="inline"> 
                  @method('delete')
                  @csrf
                    <button type="submit" onclick="return confirm('Anda yakin menghapus data ini?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
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
@endsection
