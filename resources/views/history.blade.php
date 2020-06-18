@extends('layout')

@section('content')
<!-- メインコンテンツ -->
<div class="maincontent-container">
    <table border="1">
        <tr>
            <th>メモ</th>
            <th>実行日</th>
            <th>開始時刻</th>
            <th>終了時刻</th>
            <th>勉強時間</th>
            <th></th>
        </tr>
        @foreach ($folders as $folder)
            <tr>
                <th>{{ $folder->memo }}</th>
                <th>{{ substr($folder->created_at, 0, 10) }}</th>
                <th>{{ $folder->start_time }}</th>
                <th>{{ $folder->end_time }}</th>
                <th>{{ $folder->study_time }}</th>
                <th><a href="{{ route('delete', ['id' => $folder->id]) }}" onclick="return confirm('{{ $folder->memo }} を削除します．よろしいですか？')">削除</a></th>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('index') }}" class="btn">トップへ戻る</a>
</div>
@endsection
