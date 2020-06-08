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
    <div>開始時刻 | {{ $time }}</div>
    <a href="{{ route('index') }}" class="btn">戻る</a>
    <div id="elapsed_time"></div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/js/elapsed_time.js') }}"></script>
@endsection