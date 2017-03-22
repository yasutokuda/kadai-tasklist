@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{!! link_to_route('tasks.show', "詳細", ['id' => $task->id], ['class' => 'btn btn-link']) !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif

    {!! link_to_route('tasks.create', 'タスク作成', null, ['class' => 'btn btn-primary']) !!}

@endsection