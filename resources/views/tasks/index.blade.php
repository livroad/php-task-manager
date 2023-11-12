@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="container">
            <h1 class="title">this is task-manager</h1>
            <p class="subtitle">simple app <strong>initted</strong> in 2023/11/10</p>
        </div>
    </section>

    <div class="block">

        <ul class="list-group">
            @foreach($tasks as $task)
            <div class="box">
                
                <li>
                    <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="list-group-item list-group-item-action">
                        {{ $task->title }}
                    </a>
                </li>
            </div>
            @endforeach
        </ul>
        
    </div>
    
    <div class="block">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mt-5">Create Task</a>
    </div>


@endsection