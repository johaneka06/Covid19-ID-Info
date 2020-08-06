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

    public function FetchDataGlobal()
    {
        $client = new \GuzzleHttp\Client();
        return json_decode($client->request('GET', 'https://covid19.mathdro.id/api')->getBody());
    }

    public function FetchSemuaProvinsi()
    {
        $client = new \GuzzleHttp\Client();
        return json_decode($client->request('GET', 'api.kawalcorona.com/indonesia/provinsi')->getBody());
    }

    public function FetchDataProvinsi($provinsi)
    {
        $client = new \GuzzleHttp\Client();
        $results = json_decode($client->request('GET', 'https://data.covid19.go.id/public/api/prov.json')->getBody())->list_data;
        foreach($results as $result) {
            if($result->key == $provinsi) return $result;
        }
    }
}
