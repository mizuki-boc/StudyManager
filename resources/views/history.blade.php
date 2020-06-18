@extends('layout')

@section('content')
<!-- メインコンテンツ -->
<div class="maincontent-container">
    <div>---勉強一覧(memo)---</div>
    @foreach ($folders as $folder)
        <div>{{ $folder->memo }}</div>
    @endforeach
    <a href="{{ route('index') }}" class="btn">トップへ戻る</a>
</div>
@endsection
