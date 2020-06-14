@extends('layout')

@section('content')
<div class="wrapper">
    <!-- サイドバー -->
    <div class="sidebar-container">
        <ul>
            <li class="top">Menu</li>
            <li>Timer</li>
            <li>Edit</li>
            <li>History</li>
        </ul>
    </div>
    <!-- メインコンテンツ -->
    <div class="maincontent-container">
        <!-- 日付部分 -->
        <div id="clock_date"></div>
        <!-- 時刻部分 -->
        <div id="clock_time"></div>
        <form action="running" method="POST">
            @csrf
            <input type="text" placeholder="testここに入力" name="test">
            <button type="submit" class="btn">テストボタン</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/clock.js') }}"></script>
@endsection