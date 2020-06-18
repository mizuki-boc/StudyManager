@extends('layout')

@section('content')
<!-- メインコンテンツ -->
<div class="maincontent-container">
    <!-- 日付部分 -->
    <div id="clock_date"></div>
    <!-- 時刻部分 -->
    <div id="clock_time"></div>
    <form action="study" method="POST">
        @csrf
        <input type="text" placeholder="勉強内容を記入してください．" name="memo">
        <button type="submit" class="btn">スタート</button>
    </form>
    <a href="{{ route('history') }}" class="btn">履歴</a>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/clock.js') }}"></script>
@endsection