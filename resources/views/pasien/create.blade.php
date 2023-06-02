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
          <form action="{{  route('menu.pasien.store') }}" method="POST">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="namaDepan">Nama Depan</label>
                    <input type="text" class="form-control @error('namaDepan') is-invalid @enderror" id="namaDepan"
                      name="namaDepan" value="{{ old('namaDepan') ? old('namaDepan') : '' }}"
                      placeholder="Enter nama depan">
                    @error('namaDepan')
                    <div class="text-danger" id="error-nama-depan">Nama depan wajib diisi.</div>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="namaBelakang">Nama Belakang</label>
                    <input type="text" class="form-control" id="namaBelakang" name="namaBelakang"
                      value="{{ old('namaBelakang')  ? old('namaBelakang') : ''}}" placeholder="Enter nama belakang" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label for="tempatLahir">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror" id="tempatLahir"
                      name="tempatLahir" value="{{ old('tempatLahir') ? old('tempatLahir') : ''}}"
                      placeholder="Enter tempat lahir" />
                    @error('tempatLahir')
                    <div class="text-danger" id="error-tempat-lahir">Tempat lahir wajib diisi.</div>
                    @enderror
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tanggalLahir') is-invalid @enderror"
                      id="tanggalLahir" name="tanggalLahir" placeholder="Enter tanggal lahir" />
                    @error('tanggalLahir')
                    <div class="text-danger" id="error-tanggal-lahir">Tanggal lahir wajib diisi.</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="jenisKelamin">Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenisKelamin" value="P" id="jenisKelamin"
                        checked="{{ old('jenisKelamin') == 'P' ? 1 : 0 }}">
                      <label class="form-check-label" for="jenisKelamin">
                        Perempuan
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenisKelamin" value="L" id="jenisKelamin"
                        checked="{{ old('jenisKelamin') == 'L' ? 1 : 0 }}">
                      <label class="form-check-label" for="jenisKelamin">
                        Laki - Laki
                      </label>
                    </div>
                  </div>

                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Golongan Darah">Golongan Darah</label>
                    <select id="golonganDarah" name="golonganDarah" class="form-control">
                      <option value="-">-</option>
                      @foreach($golonganDarah as $key => $item)
                      <option value="{{ $item['golonganDarah'] }}">{{ $item['golonganDarah'] }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="noHandphonePasien">No Handphone Pasien</label>
                    <input type="text" class="form-control" id="noHandphonePasien" name="noHandphonePasien"
                      value="{{ old('noHandphonePasien') ? old('noHandphonePasien') : '' }}"
                      placeholder="Enter no handphone pasien">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="noHandphonePendampingPasien">No Handphone Pendampin Pasien</label>
                    <input type="text" class="form-control" id="noHandphonePendampingPasien"
                      value="{{ old('noHandphonePendampingPasien') ? old('noHandphonePendampingPasien') : '' }}"
                      name="noHandphonePendampingPasien" placeholder="Enter no handphone pendamping pasien">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                      placeholder="Enter alamat">{{old('alamat')}}</textarea>
                    @error('alamat')
                    <div class="text-danger" id="error-alamat">Alamat wajib diisi.</div>
                    @enderror
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

@section('custom-script')
<script>
  document.addEventListener('DOMContentLoaded', function () {

    const txtNamaDepan = document.getElementsByName('namaDepan')[0];
    txtNamaDepan.addEventListener('click', function ($event) {
      $event.preventDefault();
      txtNamaDepan.classList.remove('is-invalid');
      if (document.getElementById('error-nama-depan')) {
        document.getElementById('error-nama-depan').remove();

      }
    });

    const txtTempatLahir = document.getElementsByName('tempatLahir')[0];
    txtTempatLahir.addEventListener('click', function ($event) {
      $event.preventDefault();
      txtTempatLahir.classList.remove('is-invalid');

      if (document.getElementById('error-tempat-lahir')) {
        document.getElementById('error-tempat-lahir').remove();

      }
    });

    const txtAlamat = document.getElementsByName('alamat')[0];
    txtAlamat.addEventListener('click', function ($event) {
      $event.preventDefault();
      txtAlamat.classList.remove('is-invalid');

      if (document.getElementById('error-alamat')) {
        document.getElementById('error-alamat').remove();
      }
    });

    const dateTglLahir = document.getElementsByName('tanggalLahir')[0];
    dateTglLahir.addEventListener('click', function ($event) {
      $event.preventDefault();
      dateTglLahir.classList.remove('is-invalid');

      if (document.getElementById('error-tanggal-lahir')) {
        document.getElementById('error-tanggal-lahir').remove();

      }
    });
  });
</script>
@endsection
