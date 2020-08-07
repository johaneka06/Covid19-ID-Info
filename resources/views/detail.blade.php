@extends('layout/template')

@section('title', e($prov))

@section('content')
<div class="container">
  <div class="mt-3">
    <h2 class="text-center">{{$prov}}</h2>
    <div class="mt-4 text-center">
      <h4>Rincian kasus (per tanggal {{date('d M Y', strtotime($tanggal))}}):</h4>
      <div class="row d-flex justify-content-center text-center" style="color: white;">
        <!-- Positif -->
        <div class="col-md-3 mt-4">
          <div class="card" style="background-color: red;">
            <div class="card-body">
              <h3>Positif</h3>
              <h5>{{ number_format($data->jumlah_kasus, 0, ",", ".") }}</h5>
            </div>
          </div>
        </div>
        <!-- End positif -->
        <!-- Dirawat -->
        <div class="col-md-3 mt-4">
          <div class="card" style="background-color: orange;">
            <div class="card-body">
              <h3>Dirawat</h3>
              <h5>{{ number_format($data->jumlah_dirawat, 0, ",", ".") }}</h5>
            </div>
          </div>
        </div>
        <!-- End dirawat -->
        <!-- Sembuh -->
        <div class="col-md-3 mt-4">
          <div class="card" style="background-color: green;">
            <div class="card-body">
              <h3>Sembuh</h3>
              <h5>{{ number_format($data->jumlah_sembuh, 0, ",", ".") }}</h5>
            </div>
          </div>
        </div>
        <!-- End sembuh -->
        <!-- Meninggal -->
        <div class="col-md-3 mt-4">
          <div class="card" style="background-color: black;">
            <div class="card-body">
              <h3>Meninggal</h3>
              <h5>{{ number_format($data->jumlah_meninggal, 0, ",", ".") }}</h5>
            </div>
          </div>
        </div>
        <!-- End sembuh -->
      </div>

      <div class="row d-flex justify-content-center text-center mt-5">
        <div class="col-md-6 mt-4">
          <h3>Sebaran jenis kelamin</h3>
          @include('chart/Gender')
        </div>
        <div class="col-md-6 mt-4">
          <h3>Sebaran umur</h3>
          @include('chart/Umur')
        </div>
      </div>

    </div>
  </div>
  <div class="text-center mt-5">
    <p>Sumber data: <a href="https://covid19.go.id/peta-sebaran">covid19.go.id</a></p>
    <p>Terakhir diupdate: {{ $tanggal }}</p>
  </div>
</div>
@endsection