@extends('layout')

@section('content')
お疲れ様でした！
<div>内容 | {{ $memo }}</div>
<div>勉強時間 | {{ $elapsed_time }}</div>
<a href="{{ route('index') }}" class="btn">トップへ戻る</a>
@endsection

