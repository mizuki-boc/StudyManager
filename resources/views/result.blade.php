@extends('layout')

@section('content')
<div>内容 | {{ $memo }}</div>
<div>開始時刻 | {{ $start_time }}</div>
<div>終了時刻 | {{ $end_time }}</div>
<a href="{{ route('index') }}" class="btn">トップへ戻る</a>

@endsection

