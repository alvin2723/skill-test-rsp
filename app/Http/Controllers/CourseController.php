<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    public function index()
    {

        $course = Http::get('https://raw.githubusercontent.com/cahyo-refactory/RSP-DataSet-SkilTest-FE/main/alumni-report.json')->json();
        $course_data = $course['data'];
        $course_length = count($course_data);

        return view('courses', [
            'course_data' => $course_data,
            'course_length' => $course_length
        ]);
    }
}
