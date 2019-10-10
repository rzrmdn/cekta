@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Edit Data Mahasiswa</h1> 
    <br>
    <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin_mahasiswa">Mahasiswa</a></li>
    <li class="active">Edit Data Mahasiswa</li>
    </ol>
</section>
<div class="box">
    <div class="box-body">
    <div class="row">
            <div class="col-md-6">
            <form method="post" action="/admin_mahasiswa">
        @method('put')
        @csrf
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" value="{{$student->nama}}" name="nama">
                @error('nama')<div class="alert-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM" value="" name="nim"/>
                @error('nim')<div class="alert-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukkan Tempat Lahir" value="" name="tempat_lahir"/>
                @error('tempat_lahir')<div class="alert-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="datepicker-here form-control @error('tanggal_lahir') is-invalid @enderror" data-language='en' placeholder="Masukkan Tanggal Lahir" value="" name="tanggal_lahir" />
                @error('tanggal_lahir')<div class="alert-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" value="" name="jenis_kelamin">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" class="form-control @error('alamat') is-invalid @enderror"rows="3" placeholder="Masukkan Alamat" value="" name="alamat"></textarea>
                @error('alamat')<div class="alert-danger">{{$message}}</div>@enderror
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Angkatan</label>
                <input type="text" class="form-control @error('angkatan') is-invalid @enderror" placeholder="Masukkan Angkatan" value="" name="angkatan"/>
                @error('angkatan')<div class="alert-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input type="text" class="form-control @error('sks') is-invalid @enderror" placeholder="Masukkan SKS" value="" name="sks"/>
                @error('sks')<div class="alert-danger">{{$message}}</div>@enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Masukkan Email" value="" name="email"/>
            </div>
            <div class="form-group">
                <label>No. HP</label>
                <input type="text" class="form-control" placeholder="Masukkan No. HP" value="" name="no_hp"/>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" placeholder="Masukkan Keterangan" value="" name="keterangan">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" placeholder="Masukkan Foto" value="" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
            <a href="/admin_mahasiswa" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div></div>
</div>
@endsection

<!-- Modal Edit Data-->
<!-- <div class="modal fade" id="modal_students_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Mahasiswa</h4>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" name="nim"/>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" name="tempat_lahir"/>
                    </div>
                    <div class="form-group">
                        <label>Angkatan</label>
                        <input class="form-control" name="angkatan"/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control">
                            <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input class="form-control" name="no_hp"/>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input class="form-control" name="keterangan">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->