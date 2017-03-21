@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->id }} : {{ $task->content }} {{ $task->status }} [{!! link_to_route('tasks.show', "詳細", ['id' => $task->id]) !!}]</li>
            @endforeach
        </ul>
    @endif

    {!! link_to_route('tasks.create', 'タスク作成') !!}

@endsection