<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function showRunningPage()
    {
        $time = date("H:i:s", time());
        return view('runningPage', [
            'time' => $time,
        ]);
    }
    public function runningPage()
    {
        return view('runningPage');
    }
}
