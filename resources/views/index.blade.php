@extends('layout/template')

@section('title', 'Indonesia COVID-19 Case Information')

@section('content')

<div class="jumbotron jumbotron-fluid bg-primary">
  <div class="container">
    <h1 class="display-4 text-center" style="color: white;">Informasi Kasus COVID-19 Indonesia</h1>
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
            <h3>Total Kasus</h3>
            <h5>{{ number_format($indonesia->update->total->jumlah_positif, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($indonesia->update->penambahan->jumlah_positif, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: orange;">
          <div class="card-body">
            <h3>Kasus Dirawat</h3>
            <h5>{{ number_format($indonesia->update->total->jumlah_dirawat, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($indonesia->update->penambahan->jumlah_dirawat, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: green;">
          <div class="card-body">
            <h3>Kasus Sembuh</h3>
            <h5>{{ number_format($indonesia->update->total->jumlah_sembuh, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($indonesia->update->penambahan->jumlah_sembuh, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>

      <div class="col-md-3 mt-4">
        <div class="card" style="background-color: black;">
          <div class="card-body">
            <h3>Kasus Meninggal</h3>
            <h5>{{ number_format($indonesia->update->total->jumlah_meninggal, 0, ",", ".") }}</h5>
            <i>(+{{ number_format($indonesia->update->penambahan->jumlah_meninggal, 0, ",", ".") }})</i>
          </div>
        </div>
      </div>
      <a href="{{ url('/provinsi') }}" class="mt-3">Lihat kasus per-provinsi</a>
    </div>
    <div class="mt-3 text-center justify-content-center">
      <div><h3>Lihat grafik</h3></div>
      <div>
        <button class="btn btn-primary" id="positif">Kasus Indonesia</button>
        <button class="btn btn-primary" id="growth">Pertumbuhan kasus</button>
      </div>
      
    </div>
    @include('chart/idxchart')
    <h6 class="mt-1 text-center" style="color: black;">Update Terakhir: {{ $indonesia->update->penambahan->created }}</h6>
  </div>
  <!-- End ID div -->
  <!-- Start global div -->
  <div class="mt-5" id="global">
    <h2 class="text-center">Jumlah Kasus Global:</h2>
    <div class="row d-flex justify-content-center text-center" style="color: white;">

      <div class="col-md-4 mt-4">
        <div class="card" style="background-color: red;">
          <div class="card-body">
            <h3>Total kasus</h3>
            <h5>{{ number_format($global->confirmed->value, 0, ",", ".") }}</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card" style="background-color: green;">
          <div class="card-body">
            <h3>Kasus Sembuh</h3>
            <h5>{{ number_format($global->recovered->value, 0, ",", ".") }}</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card" style="background-color: black;">
          <div class="card-body">
            <h3>Kasus Meninggal</h3>
            <h5>{{ number_format($global->deaths->value, 0, ",", ".") }}</h5>
          </div>
        </div>

      </div>
    </div>
    <h6 class="mt-3 text-center">Update terakhir: {{ $global->lastUpdate }}</h6>
  </div>
  <!-- End global div -->

  <p class="mt-1 text-center">Sumber data: <a href="http://covid19.go.id">Pemerintah Indonesia</a> (Indonesia) dan <a href="https://github.com/mathdroid/covid-19-api">Mathdroid</a> (Internasional)</p>
  <br><br>
</div>
@endsection