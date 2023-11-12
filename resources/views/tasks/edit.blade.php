@extends('layouts.app')

@section('content')

    <h1>Edit page</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>

        <button type="submit">Update Task</button>
    </form>

    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this task?')">Delete Task</button>

    </form>

    <br><br>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary mt-2">Back to Task List</a>
@endsection