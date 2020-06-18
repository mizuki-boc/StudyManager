<?php

namespace App\Http\Controllers;

use App\Folder;
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
    public function showResult(Request $request)
    {
        // セッション情報から読み取り
        $memo = $request->session()->get('memo');
        //セッションに書き込み
        $end_time = date('H:i:s');
        $request->session()->put('end_time', $end_time);
        //勉強時間の計算
        $elapsed_time = gmdate('H:i:s', strtotime($request->session()->get('end_time')) - strtotime($request->session()->get('start_time')));

        //db に保存．
        $folder = new Folder();
        $folder->memo = $memo;
        $folder->study_time = $elapsed_time;
        $folder->start_time = $request->session()->get('start_time');
        $folder->end_time = $end_time;
        $folder->save();

        return view('result', [
            'memo' => $memo,
            'elapsed_time' => $elapsed_time,
        ]);
    }
    public function showHistory()
    {
        $folders = Folder::all();
        
        return view('history', [
            'folders' => $folders,
        ]);
    }
}