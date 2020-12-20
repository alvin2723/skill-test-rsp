<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $partner = Http::get('https://raw.githubusercontent.com/cahyo-refactory/RSP-DataSet-SkilTest-FE/main/partner.json')->json();
        $seen_on = Http::get('https://raw.githubusercontent.com/cahyo-refactory/RSP-DataSet-SkilTest-FE/main/seen_on.json')->json();

        $partner_data = $partner['data'];
        $partner_length = count($partner_data);


        $seen_data = $seen_on['data'];
        $seen_length = count($seen_data);

        return view('home', [
            'partner_data' => $partner_data,
            'partner_length' => $partner_length,
            'seen_data' => $seen_data,
            'seen_length' => $seen_length
        ]);
    }
}
