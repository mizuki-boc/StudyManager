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
        // ここで html タグ内の時刻を読み込む．
        $tmp = '23:12';
        return view('runningPage', [
            'time' => $tmp,
        ]);
    }
    public function runningPage()
    {
        return view('runningPage');
    }
}
