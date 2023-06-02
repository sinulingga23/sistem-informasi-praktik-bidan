@extends('layouts.base')

@section('title')
<title>Tambah Data Pasien</title>
@endsection


@section('heading')
<h1>Tambah Data Pasien</h1>
@endsection

@section('breadcrumb')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="{{ route('menu.pasien.index') }}">Pasien</a></li>
  <li class="breadcrumb-item active">Create</li>
</ol>
@endsection

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Pasien</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="namaDepan">Nama Depan</label>
                    <input type="email" class="form-control" id="namaDepan" placeholder="Enter nama depan">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="namaBelakang">Nama Belakang</label>
                    <input type="text" class="form-control" id="namaBelakang" placeholder="Enter nama belakang" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" placeholder="Enter tempat lahir" />
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" placeholder="Enter tanggal lahir" />
                  </div>
                </div>
              </div>

            </div>


            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
