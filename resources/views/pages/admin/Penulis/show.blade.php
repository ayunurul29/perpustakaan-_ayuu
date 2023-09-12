@extends('layouts.admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <h3>Peminjaman</h3>
        </div>
    </div>
</div>

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penulis</h2>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card-body">
         <div style="margin-bottom: 20px">
            <a href="{{ route('penulis_index') }}" class="btn btn-primary btn-flat">Kembali</a>
        </div>
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama Penulis</th>
                <td>{{ $data->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $data->alamat }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Telepon</th>
                <td>{{ $data->telepon}}</td>
            </tr>
           
        </table>
    </div>
</div>
</div>
@endsection