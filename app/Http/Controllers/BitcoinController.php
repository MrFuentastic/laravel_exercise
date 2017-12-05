<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitcoinController extends Controller
{
    //
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.coinmarketcap.com/v1/ticker/bitcoin');
        $data = $response->getBody();
        echo gettype($data);
        return view('bitcoin.index');
    }
}