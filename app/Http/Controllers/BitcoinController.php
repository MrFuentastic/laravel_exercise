<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitcoinController extends Controller
{
    //
    public function index()
    {
        $json = json_decode(file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin'), true);
        $data = $json[0];
        return view('bitcoin.index', $data);
    }
}