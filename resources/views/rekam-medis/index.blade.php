@extends('layouts.base')

@section('title')
<title>Menu Rekam Medis</title>
@endsection

@section('custom-script')
<style>
</style>
@endsection

@section('heading')
<h1>Rekam Medis Management</h1>
@endsection

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route('menu.pasien.index') }}">Home</a></li>
    <li class="breadcrumb-item active">Rekam Medis</li>
  </ol>
@endsection


@section('content')
<div class="container-fluid">

  <!-- Detail Pasien -->
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <tbody>
          <tr>
            <td>ID</td>
            <td>:</td>
            <td>001</td>
          </tr>
          <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td>User</td>
          </tr>
          <tr>
            <td>Golongan Darah</td>
            <td>:</td>
            <td>AB</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>Perempuan</td>
          </tr>
          <tr>
            <td>Tempat / Tanggal Lahir</td>
            <td>:</td>
            <td>Medan / 01-01-2001</td>
          </tr>
          <tr>
            <td>Umur</td>
            <td>:</td>
            <td>22 Tahun</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>Jl.Tikus No.1</td>
          </tr>
          <tr>
            <td>No.HP Pasien</td>
            <td>:</td>
            <td>081234567890</td>
          </tr>
          <tr>
            <td>No.Hp Pendamping</td>
            <td>:</td>
            <td>081234567890</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- TAB Rekam Medis Pasien -->
  <div class="row">
    <div class="col-md-12">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="#">KB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A N C</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Persalinan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nifas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bayi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Umum</a>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
