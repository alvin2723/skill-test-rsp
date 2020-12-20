<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailCourseController extends Controller
{
    public function index()
    {
        $detail = Http::get('https://raw.githubusercontent.com/cahyo-refactory/RSP-DataSet-SkilTest-FE/main/detail-course.json')->json();

        $detail_data = $detail;
        $detail_materi = $detail['materi course'][0];
        $detail_materi_data = $detail_materi['data'];

        return view('detail-course', [
            'detail_data' => $detail_data,
            'detail_materi' =>  $detail_materi,
            'detail_materi_data' => $detail_materi_data
        ]);
    }
}
