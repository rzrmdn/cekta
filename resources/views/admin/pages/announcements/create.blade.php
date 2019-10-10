@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Tambah Data Pengumuman</h1> 
    <br/>
    <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin_pengumuman">Pengumuman</a></li>
        <li class="active">Tambah Data Pengumuman</li>
    </ol>
</section>
<div class="box">
    
            <form method="post" action="/admin_pengumuman">
            @csrf
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul" value="{{ old('judul') }}" name="judul">
                        @error('judul')<div class="text-danger">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Isi</label>
                        <input type="text" class="form-control @error('isi') is-invalid @enderror" placeholder="Masukkan isi" value="{{ old('isi') }}" name="isi"/>
                        @error('isi')<div class="text-danger">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="datepicker-here form-control @error('tanggal') is-invalid @enderror" data-language='en' placeholder="Masukkan Tanggal" value="{{ old('tanggal') }}" name="tanggal" />
                        @error('tanggal')<div class="text-danger">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" placeholder="Masukkan Status" value="{{ old('status') }}" name="status">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" placeholder="Masukkan Foto" value="{{ old('username') }}" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/admin_pengumuman" class="btn btn-danger">Kembali</a>
            </form>
</div>
@endsection