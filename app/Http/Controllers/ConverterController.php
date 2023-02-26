<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mockery\Undefined;

class ConverterController extends Controller
{
    public function index()
    {
        return view('converter');
    }
    public function convert(Request $request)
    {
        $data = $request->input('search-data');
        if (!isset($data)) {
            Session::flash('gagal', 'Please includes video link');
            return redirect('');
        }
        parse_str( parse_url($data, PHP_URL_QUERY ), $my_array_of_vars);
        $url = $my_array_of_vars['v'];
        $client = new Client();
        $response = $client->request('GET', 'https://youtube-mp36.p.rapidapi.com/dl?', [
            'query' => [
                'id' => $url
            ],
            'headers' => [
                'X-RapidAPI-Key' => 'caa0f82e10msh6a053c0286958edp1f2191jsnf807b8f3b525',
                'X-RapidAPI-Host' => 'youtube-mp36.p.rapidapi.com'
                ]
            ]);
        $result = json_decode($response->getBody()->getContents());
        return view('hasil', [
            'result' => $result
        ]);
    }
}
