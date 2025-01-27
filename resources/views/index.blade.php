@extends('layouts.app')

@section('title', 'The list of task')


@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show',['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>No more task</div>
    @endforelse
@endsection