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
        // $this->start_time = date('H:i:s');
        $request->session()->put('memo', $request->input('memo'));
        $request->session()->put('start_time', date('H:i:s'));

        return view('study', [
            'memo' => $request->session()->get('memo'),
            'start_time' => $request->session()->get('start_time'),
        ]);
    }
    public function result(Request $request)
    {
        // start_time と end_time からどれだけ経過したか計算する．
        $request->session()->put('end_time', date('H:i:s'));

        return view('result', [
            'memo' => $request->session()->get('memo'),
            'start_time' => $request->session()->get('start_time'),
            'end_time' => $request->session()->get('end_time'),
        ]);
    }
}