@extends('layouts.app')

@section('content')

    <h1>Show page</h1>

    <div class="before">
        <h2>Task: {{ $task->title }}</h2>
        <p>Description: {{ $task->description }}</p>
        <p>created_at: {{ $task->created_at }}</p>
        <p>updated_at: {{ $task->updated_at }}</p>
    </div>

    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit Task</a>
    <br><br>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
@endsection