@extends('layout')

@section('content')
<div class="wrapper">
    <!-- サイドバー -->
    <div class="sidebar-container">
        <ul>
            <li class="top">カテゴリ</li>
            <li>PHP</li>
            <li>Python</li>
            <li>応用情報技術者試験</li>
        </ul>
    </div>
    <!-- メインコンテンツ -->
    <div class="maincontent-container">
        <div>
            <a href="#" class="btn">Start</a>
            <a href="#" class="btn">Stop</a>
        </div>
    </div>
</div>
@endsection