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
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_students_create"><i class="fa fa-plus"></i>
                Tambah
              </button>
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

<!-- Modal Tambah Data-->
<div class="modal fade" id="modal_students_create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Mahasiswa</h4>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin_mahasiswa">
              @csrf
              <div class="col-md-6">
              <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}" name="nama">
                  @error('nama')<div class="text-danger">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                  <label>NIM</label>
                  <input type="text" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM" value="{{ old('nim') }}" name="nim"/>
                  @error('nim')<div class="text-danger">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukkan Tempat Lahir" value="{{ old('tempat_lahir') }}" name="tempat_lahir"/>
                  @error('tempat_lahir')<div class="text-danger">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" class="datepicker-here form-control @error('tanggal_lahir') is-invalid @enderror" data-language='en' placeholder="Masukkan Tanggal Lahir" value="{{ old('tanggal_lahir') }}" name="tanggal_lahir" />
                  @error('tanggal_lahir')<div class="text-danger">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" value="{{ old('jenis_kelamin') }}" name="jenis_kelamin">
                      <option value="Laki-laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Alamat</label>
                  <textarea type="text" class="form-control @error('alamat') is-invalid @enderror"rows="3" placeholder="Masukkan Alamat" value="{{ old('alamat') }}" name="alamat"></textarea>
                  @error('alamat')<div class="text-danger">{{$message}}</div>@enderror
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label>Angkatan</label>
                  <input type="text" class="form-control @error('angkatan') is-invalid @enderror" placeholder="Masukkan Angkatan" value="{{ old('angkatan') }}" name="angkatan"/>
                  @error('angkatan')<div class="text-danger">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                  <label>SKS</label>
                  <input type="text" class="form-control @error('sks') is-invalid @enderror" placeholder="Masukkan SKS" value="{{ old('sks') }}" name="sks"/>
                  @error('sks')<div class="text-danger">{{$message}}</div>@enderror
              </div>
              <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="Masukkan Email" value="{{ old('email') }}" name="email"/>
              </div>
              <div class="form-group">
                  <label>No. HP</label>
                  <input type="text" class="form-control" placeholder="Masukkan No. HP" value="{{ old('no_hp') }}" name="no_hp"/>
              </div>
              <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" placeholder="Masukkan Keterangan" value="{{ old('keterangan') }}" name="keterangan">
              </div>
              <div class="form-group">
                  <label>Foto</label>
                  <input type="file" placeholder="Masukkan Foto" value="{{ old('username') }}" name="foto">
              </div>
            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
    </div>
</div>
@endsection
