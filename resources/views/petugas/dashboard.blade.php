@extends('layout')

@section('title', 'Home | Sistem Pengaduan Masyarakat')
@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header">
              <strong>Selamat datang, {{\Auth::guard('petugas')->user()->nama_petugas}}</strong>
          </div>
          <div class="list-group-item">
            <div class="row">
              <div class="col">
                <h4>Jumlah Masyarakat</h4> 
              </div>
              <h5 class="text-right mr-2">{{$Masyarakat}}</h5>
            </div>
          </div>
          <div class="list-group-item">
          <div class="row">
              <div class="col">
            <h4>Jumlah Petugas</h4>
          </div>
          <h5 class="text-right mr-2">{{$Petugas}}</h5>
          </div>
          </div>
          <div class="list-group-item">
          <div class="row">
              <div class="col">
            <h4>Jumlah Pengaduan</h4>
          </div>
          <h5 class="text-right mr-2">{{$Pengaduan}}</h5>
          </div>
            </div>
            <div class="list-group-item">
            <div class="row">
              <div class="col">
                <h4>Jumlah Tanggapan</h4> 
              </div>
              <h5 class="text-right mr-2">{{$Tanggapan}}</h5>
            </div>
          </div>
          <div class="list-group-item">
            <div class="row">
              <div class="col">
                <h4>Jumlah Belum di Tanggapi</h4> 
              </div>
              <h5 class="text-right mr-2">{{$belum}}</h5>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection