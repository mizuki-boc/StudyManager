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
        <form action="post">
            <a href="{{ route('running') }}" class="btn">スタート</a>
            <select name="test" id="">
                <option value="サンプル１">Python</option>
                <option value="サンプル１">PHP</option>
            </select>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/clock.js') }}"></script>
@endsection