@extends('layout')

@section('content')
<!-- メインコンテンツ -->
<div class="maincontent-container">
    <table border="1">
        <tr>
            <th>メモ</th>
            <th>開始時刻</th>
            <th>終了時刻</th>
            <th>勉強時間</th>
            <th></th>
        </tr>
        @foreach ($folders as $folder)
            <tr>
                <th>{{ $folder->memo }}</th>
                <th>{{ $folder->start_time }}</th>
                <th>{{ $folder->end_time }}</th>
                <th>{{ $folder->study_time }}</th>
                <th><a href="#">削除</a></th>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('index') }}" class="btn">トップへ戻る</a>
</div>
@endsection
