<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListCourseController extends Controller
{
    public function index()
    {
        return view('list-courses');
    }
}
