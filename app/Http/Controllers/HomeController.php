<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function showRunningpage(Request $request)
    {
        $test = $request->input();
        return view('runningPage', [
            'test' => $test,
        ]);
    }
    public function running(Request $request)
    {
        $test = $request->input('test');
        return view('runningPage', [
            'test' => $test,
        ]);
    }
}
