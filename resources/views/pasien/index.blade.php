@extends('layouts.base')

@section('title')
<title>Menu Pasien</title>
@endsection

@section('custom-script')
<style>
  .row {
    margin-bottom: 10px;
  }
</style>
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
    <div class="col-md-4">
      <button class="btn btn-outline-primary"><a href="{{ route('menu.pasien.create') }}">Tambah Data</a></button>
      </div>
    <div class="col-md-8">

    </div>
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
              @forelse ($listPasien as $key => $item)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $item['code'] }}</td>
                  <td>{{ $item['namaLengkap'] }}</td>
                  <td>{{ $item['tanggalLahir'] }}</td>
                  <td>{{ $item['jenisKelamin'] }}</td>
                  <td>{{ $item['golonganDarah']}}</td>
                  <td>{{ $item['noHandphonePasien']}}</td>
                  <td>{{ $item['noHandphonePendampingPasien']}}</td>
                </tr>
              @empty
              <tr>
                <td colspan="8" style="text-align: center;">Tidak ada</td>
              </tr>
              @endforelse
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
