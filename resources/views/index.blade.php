@extends('layouts.app')

@section('title')
    Tasks
@endsection
@section('content')
    <h1>The list of TASK</h1>
    @forelse ($tasks as $task)
        <div><a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a></div>
    @empty
        <div>No TASK</div>
    @endforelse
@endsection
