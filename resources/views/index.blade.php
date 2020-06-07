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
        <div>
            <a href="#" class="btn">Start</a>
            <a href="#" class="btn">Stop</a>
        </div>
        <form action="{{ route('running') }}" method="GET">
            <!-- 時刻部分 -->
            <div id="clock_time"></div>
            <!-- 日付部分 -->
            <div id="clock_date"></div>
            <button class="btn" type="submit">スタート</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/clock.js') }}"></script>
@endsection