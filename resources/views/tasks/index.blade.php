@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="container">
            <h1 class="title">this is task-manager</h1>
            <p class="subtitle">simple app <strong>initted</strong> in 2023/11/10</p>
        </div>
    </section>

    <div class="block">

        <ul>
            @foreach($tasks as $task)
            <div class="box">
                
                <li>
                    <a href="{{ route('tasks.show', ['task' => $task->id]) }}">
                        {{ $task->title }}
                    </a>
                </li>
            </div>
            @endforeach
        </ul>
        
    </div>
    
    <div class="block">
        <a href="{{ route('tasks.create') }}" class="button is-link">Create Task</a>
    </div>


@endsection