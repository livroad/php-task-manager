@extends('layouts.app')

@section('content')
<h1>Create task</h1>

<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <div class="field">
        <label class="label" for="title">Title:</label>
        <div class="control">
            <input class="input is-success" name="title" type="text" placeholder="Text input" required>
        </div>
        <p class="help is-success">task title</p>
    </div>

    <div class="field">
        <label class="label" for="description">Description:</label>
        <div class="control">
            <textarea class="textarea" name="description" required></textarea>
        </div>
        <p class="help is-success">Please write Description</p>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit">Create Task</button>
        </div>
        <div class="control">
            <a href="{{ route('tasks.index') }}" class="button is-link is-light">
                    Cancel                
            </a>
        </div>
    </div>

</form>

@endsection