<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description'=> 'nullable',
        ]);

        Task::create($validateData);

        return redirect('/tasks')->with('success', 'Task created successfully!');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description'=> 'nullable',
        ]);

        $task = Task::find($id);
        $task->update($validateData);

        return redirect('/tasks')->with('success', 'Task updated successfully!');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks')->with('success', 'Task deleted successfully!');

    }


}
