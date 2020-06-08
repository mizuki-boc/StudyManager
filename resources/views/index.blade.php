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
        <a href="{{ route('running') }}" class="btn">スタート</a>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/clock.js') }}"></script>
@endsection