<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        $res = new APIController();
        $indonesia = $res->FetchDataIndonesia();
        $global = $res->FetchDataGlobal();
        return view('index', ['indonesia' => $indonesia, 'global' => $global]);
    }

    public function Province()
    {
        $res = new APIController();
        $datas = $res->FetchSemuaProvinsi();
        return view('province', ['datas' => $datas]);
    }

    public function ProvinceDetail($provinsi)
    {
        $res = new APIController();
        $provinsi = str_replace('-', ' ', $provinsi);
        $data = $res->FetchDataProvinsi(strtoupper($provinsi));
        return view('detail', ['data' => $data, 'prov' => $provinsi]);
    }

    public function About()
    {
        return view('about');
    }
}
