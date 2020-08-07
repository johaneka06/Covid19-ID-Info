@extends('layout/template')

@section('title', 'Kasus per Provinsi')

@section('content')
<div class="container mt-4">
  <h1 class="text-center">Kasus per Provinsi</h1>
  <table class="table mt-4">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Positif</th>
        <th scope="col">Sembuh</th>
        <th scope="col">Meninggal</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($datas as $data)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $data->attributes->Provinsi }}</td>
        <td>{{ number_format($data->attributes->Kasus_Posi, 0, ",", ".") }}</td>
        <td>{{ number_format($data->attributes->Kasus_Semb, 0, ",", ".") }}</td>
        <td>{{ number_format($data->attributes->Kasus_Meni, 0, ",", ".") }}</td>
        <td>
        <a href="{{route('DetailProvinsi', ['provinsi' => str_replace(' ', '-', $data->attributes->Provinsi)])}}" class="badge badge-primary">Detail kasus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <p class="text-center mt-5">Data fetched from <a href="api.kawalcorona.com/indonesia/provinsi">kawalcorona.com</a></p>
  <br>
</div>
@endsection