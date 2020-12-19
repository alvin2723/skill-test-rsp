<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function submitLogin(Request $request)
    {
        if ($request->email == "alvinjulian62@gmail.com" && $request->password == "12345678") {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }
}
