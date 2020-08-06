<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function FetchDataIndonesia()
    {
        $client = new \GuzzleHttp\Client();
        return json_decode($client->request('GET', 'https://data.covid19.go.id/public/api/update.json')->getBody());
    }

    protected function FetchDataGlobal()
    {

    }

    protected function FetchDataProvinsi($provinsi)
    {

    }
}
