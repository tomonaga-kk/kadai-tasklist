<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
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
        $task = new Task;
        $task->content = $request->content;
        $task->save();
        
        return redirect('/');
    }

    public function show(string $id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
        $task->content = $request->content;
        $task->save();
        
        return redirect()->route('tasks.show', [$task->id]);
    }

    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        
        return redirect('/');
    }
}
