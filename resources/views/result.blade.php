@extends('layout')

@section('content')
<div>内容 | {{ $memo }}</div>
<div>勉強時間 | {{ $elapsed_time }}</div>
<a href="{{ route('index') }}" class="btn">トップへ戻る</a>

@endsection

