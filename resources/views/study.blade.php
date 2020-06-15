@extends('layout')

@section('content')

<!-- メインコンテンツ -->
<div>内容 | {{ $memo }}</div>
<div>開始時刻 | {{ $start_time }}</div>
<form action="result" method="POST">
    @csrf
    <div id="elapsed_time"></div>
    <button type="submit" class="btn">終了</button>
</form>

@endsection

@section('scripts')
    <script src="{{ asset('/js/elapsed_time.js') }}"></script>
@endsection