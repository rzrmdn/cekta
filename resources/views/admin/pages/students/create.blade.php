@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Tambah Data Mahasiswa</h1> 
    <br/>
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin_mahasiswa">Mahasiswa</a></li>
        <li class="active">Tambah Data Mahasiswa</li>
    </ol>
</section>
<div class="box">
    <div class="box-body">
        <div class="row">
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
                        <input type="email" class="form-control" placeholder="Masukkan Email" value="{{ old('email') }}" name="email"/>
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
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/admin_mahasiswa" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection