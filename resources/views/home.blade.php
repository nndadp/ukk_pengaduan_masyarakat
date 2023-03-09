@extends('layout')

@section('title', 'Sistem Pengaduan Masyarakat')
@section('content')
  <div class="container mt-5">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <div></div>
              <strong>
                  <center>
                    PENGADUAN MASYARAKAT
                  <center>
              </strong>

              <div><center>SILAHKAN LOGIN<center></div>
          </div>
              
                      <div class="card-body mx-auto">
                        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-gray-800">
                          <h4 class="my-4 text-4xl font-bold leading-tight">
                            Layanan Pengaduan Masyarakat Online
                          </h4>
                          <p class="leading-normal text-1xl mb-8">
                            Sampaikan laporan masalah Anda di sini, kami akan memprosesnya
                            dengan cepat.
                          </p>

                        <a href="{{url('/masyarakat/login')}}" class="btn btn-outline-primary">Login </a>
                        <a href="{{url('/masyarakat/register')}}" class="btn btn-outline-secondary">register</a>
                        <a href="{{url('/petugas/register')}}"></a>

                      </div>
                  
          </div>
      </div>
    </div>
</div>
@endsection