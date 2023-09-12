@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Rubah Data</h3>
          </div>

          <div class="card-body">
            <form action="{{ route('penulis_store') }}" method="POST" enctype="multipart/form-data">
              @csrf
        <div class="form-group">
                <label for="nama">Nama Penulis</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Enter nama" >
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
             <div class="form-group">
                <label for="id_anggota">Alamat</label>
                <input type="text" class="form-control @error('id_anggota') is-invalid @enderror" id="id_anggota" name="id_anggota" value="{{ old('id_anggota') }}" placeholder="Enter nama" >
                @error('id_anggota')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="tanggal_pinjam">Telepon </label>
                <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}" placeholder="Enter tanggal_pinjam" >
                @error('tanggal_pinjam')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
             <div class="form-group">
                <label for="tanggal_kembali">Email</label>
                <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali" name="tanggal_kembali" value="{{ old('tanggal_kembali') }}" placeholder="Enter tanggal_kembali" >
                @error('tanggal_kembali')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            
           
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>

        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


@endsection