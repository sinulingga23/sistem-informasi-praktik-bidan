@extends('layouts.base')

@section('title')
<title>Menu Pasien</title>
@endsection

@section('heading')
<h1>Pasien Management</h1>
@endsection

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Pasien</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">

  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pasien</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>Code</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Golongan Darah</th>
                <th>No. HP Pasien</th>
                <th>No. HP Pendamping Pasien</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>ABD232</td>
                <td>John Doe</td>
                <td>10/10/2023</td>
                <td>Laki - Laki</td>
                <td>A</td>
                <td>012345678901</td>
                <td>098765432101</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eleifend.</th>
              </tr>
              <tr>
                <td>2</td>
                <td>ABD235</td>
                <td>Steven</td>
                <td>10/10/2023</td>
                <td>Laki - Laki</td>
                <td>A</td>
                <td>012345678901</td>
                <td>-</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eleifend.</th>
              </tr>
              <tr>
                <td>3</td>
                <td>ABD235</td>
                <td>Steven</td>
                <td>10/10/2023</td>
                <td>Laki - Laki</td>
                <td>A</td>
                <td>012345678901</td>
                <td>-</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eleifend.</th>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection
