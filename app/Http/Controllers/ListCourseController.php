<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ListCourseController extends Controller
{
    public function index()
    {

        $list = Http::get('https://raw.githubusercontent.com/cahyo-refactory/RSP-DataSet-SkilTest-FE/main/list-course.json')->json();
        $list_data = $list['data'];
        $list_length = count($list_data);

        return view('list-courses', [
            'list_data' => $list_data,
            'list_length' => $list_length
        ]);
    }
}
