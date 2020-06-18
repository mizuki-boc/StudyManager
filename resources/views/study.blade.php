@extends('layout')

@section('content')

<!-- メインコンテンツ -->
<div>内容 | {{ $memo }}</div>
<div>開始時刻 | {{ $start_time }}</div>
<div id="elapsed_time"></div>
<a href="{{ route('result') }}" class="btn">終了して勉強記録を保存する</a>

@endsection

@section('scripts')
    <script src="{{ asset('/js/elapsed_time.js') }}"></script>
@endsection