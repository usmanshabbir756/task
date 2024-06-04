@extends('layouts.app')

@section('title' , "List of Tasks")

@section('content')
    @forelse ($tasks as $task)
        <div><a href="{{ route('tasks.show',[ 'id' => $task->id ]) }}">{{$task->title}}</a></div>
    @empty
        <div>No task awailable</div>
    @endforelse
@endsection