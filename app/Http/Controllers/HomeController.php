<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $memo;
    public $start_time;
    public $end_time;

    public function index()
    {
        return view('index');
    }
    public function study(Request $request)
    {
        $request->session()->put('memo', $request->input('memo'));
        $request->session()->put('start_time', date('H:i:s'));

        return view('study', [
            'memo' => $request->session()->get('memo'),
            'start_time' => $request->session()->get('start_time'),
        ]);
    }
    public function result(Request $request)
    {
        $request->session()->put('end_time', date('H:i:s'));
        $elapsed_time = gmdate('H:i:s', strtotime($request->session()->get('end_time')) - strtotime($request->session()->get('start_time')));

        return view('result', [
            'memo' => $request->session()->get('memo'),
            'elapsed_time' => $elapsed_time,
        ]);
    }
}