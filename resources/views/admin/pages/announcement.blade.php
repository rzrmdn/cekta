@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>Data Pengumuman</h1>
        <br>
        <small></small>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengumuman</li>
      </ol>
    </section>
    <div class="box">
      <div class="box-header">
        <h1 class="box-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modal_announcement"><i class="fa fa-plus"></i> Tambah</button>
        </h1>
      </div>
      <!--TAmbah Modal -->
      <div class="modal fade" id="modal_announcement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Tambah Pengumuman</h4>
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                <label>Judul</label>
                  <input type="text" class="form-control" name="judul" required>
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
        </div>
        <!--Edit Modal -->
      <div class="modal fade" id="modal_announcement_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Edit Pengumuman</h4>
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                <label>Judul</label>
                  <input type="text" class="form-control" name="judul" required>
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nama Lengkap</th>
              <th>NIM</th>
              <th>SKS</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Ahmad Yusuf</td>
              <td>161081721002</td>
              <td>Win 95+</td>
              <td>4</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Ahmad Yusuf</td>
              <td>161081721002</td>
              <td>Win 95+</td>
              <td>5</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Ahmad Yusuf</td>
              <td>161081721002</td>
              <td>Win 95+</td>
              <td>5.5</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Ahmad Yusuf</td>
              <td>161081721002</td>
              <td>Win 98+</td>
              <td>6</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Ahmad Yusuf</td>
              <td>161081721002</td>
              <td>Win XP SP2+</td>
              <td>7</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Ahmad Yusuf</td>
              <td>161081721002</td>
              <td>Win XP</td>
              <td>6</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.7</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Firefox 2.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Firefox 3.0</td>
              <td>Win 2k+ / OSX.3+</td>
              <td>1.9</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Camino 1.0</td>
              <td>OSX.2+</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Camino 1.5</td>
              <td>OSX.3+</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Netscape 7.2</td>
              <td>Win 95+ / Mac OS 8.6-9.2</td>
              <td>1.7</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Netscape NIM 8</td>
              <td>Win 98SE+</td>
              <td>1.7</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Netscape Navigator 9</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.0</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.1</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.1</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.2</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.2</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.3</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.3</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.4</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.4</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.5</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.5</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.6</td>
              <td>Win 95+ / OSX.1+</td>
              <td>1.6</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.7</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.7</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Mozilla 1.8</td>
              <td>Win 98+ / OSX.1+</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Seamonkey 1.1</td>
              <td>Win 98+ / OSX.2+</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Syahrul Alam Suriazdin</td>
              <td>Epiphany 2.20</td>
              <td>Gnome</td>
              <td>1.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Akbar Reforma Eriputra</td>
              <td>Safari 1.2</td>
              <td>OSX.3</td>
              <td>125.5</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Akbar Reforma Eriputra</td>
              <td>Safari 1.3</td>
              <td>OSX.3</td>
              <td>312.8</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Akbar Reforma Eriputra</td>
              <td>Safari 2.0</td>
              <td>OSX.4+</td>
              <td>419.3</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Akbar Reforma Eriputra</td>
              <td>Safari 3.0</td>
              <td>OSX.4+</td>
              <td>522.1</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Akbar Reforma Eriputra</td>
              <td>OmniWeb 5.5</td>
              <td>OSX.4+</td>
              <td>420</td>
              <td>
                <a data-toggle="modal" data-target="#modal_announcement_edit"  class="btn btn-info btn-sm"><span class="fa fa-edit"></span> Edit</a>
                <a onclick="return confirm('Anda yakin menghapus data ini?')" href="#" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>Nama Lengkap</th>
              <th>NIM</th>
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