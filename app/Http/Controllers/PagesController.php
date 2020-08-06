<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        $res = new APIController();
        $msg = $res->FetchDataIndonesia();
        return view('index', ['result' => $msg]);
    }

    public function About()
    {
        return view('about');
    }
}
