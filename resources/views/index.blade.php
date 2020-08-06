@extends('layout/template')

@section('title', 'Indonesia COVID-19 Case Information')

@section('content')

<div class="jumbotron jumbotron-fluid bg-primary">
  <div class="container">
    <h1 class="display-4 text-center" style="color: white;">Informasi Kasus COVID-19 di Indonesia</h1>
    <p class="lead mt-4 text-center" style="color: white;">Indonesia Coronavirus Live Data</p>
  </div>
</div>

<div class="container">
  <!-- Start ID div -->
  <div id="id">
    <h2 class="text-center">Jumlah Kasus di Indonesia:</h2>
    <div class="row d-flex justify-content-center text-center" style="color: white;">

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: red;">
          <div class="card-body">
            <h3>Total kasus</h3>
            <h5>{{ number_format($result->update->total->jumlah_positif, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($result->update->penambahan->jumlah_positif, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: orange;">
          <div class="card-body">
            <h3>Kasus Dirawat</h3>
            <h5>{{ number_format($result->update->total->jumlah_dirawat, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($result->update->penambahan->jumlah_dirawat, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: green;">
          <div class="card-body">
            <h3>Kasus Sembuh</h3>
            <h5>{{ number_format($result->update->total->jumlah_sembuh, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($result->update->penambahan->jumlah_sembuh, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: black;">
          <div class="card-body">
            <h3>Kasus Meninggal</h3>
            <h5>{{ number_format($result->update->total->jumlah_meninggal, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($result->update->penambahan->jumlah_meninggal, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>
      <a href="#" class="mt-3">Detail kasus tiap provinsi</a>
    </div>
  </div>
  <!-- End ID div -->
  <!-- Start global div -->
  <div class="mt-5" id="global">
  <h2 class="text-center">Jumlah Kasus Global:</h2>
    <div class="row d-flex justify-content-center text-center" style="color: white;">

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: red;">
          <div class="card-body">
            <h3>Total kasus</h3>
            <h5>123456789</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: orange;">
          <div class="card-body">
            <h3>Kasus Dirawat</h3>
            <h5>123456789</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: green;">
          <div class="card-body">
            <h3>Kasus Sembuh</h3>
            <h5>123456789</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: black;">
          <div class="card-body">
            <h3>Kasus Meninggal</h3>
            <h5>123456789</h5>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End global div -->
  <h6 class="mt-5 text-center" style="color: black;">Update Terakhir: {{ $result->update->penambahan->created }}</h6>
  <br><br><br><br>
</div>

@endsection