@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>

    <div>
    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    </div>
    
    <div>
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    </div>

    <div>{!! link_to_route('tasks.index', 'TOPへ', null, ['class' => 'btn btn-link']) !!}</div>

@endsection