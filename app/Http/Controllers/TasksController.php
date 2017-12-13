<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;
use App\User;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', '=',Auth::id())->orderBy('created_at','desc')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $task = Task::all();
        return view('tasks.create', compact('task'));
    }

    public function store(Request $request)
    {
        $task = new Task;
        $this->validate(request(),[
            'body' => 'required',
            'complete' => 'required',
        ]);
        $task->user_id = auth()->id();
        $task->body = request('body');
        $task->complete = request('complete');
        $task->save();
        return redirect('/tasks');

    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $task = Task::find($task->id);
        return view('tasks.edit',compact('task', 'id'));
    }

    public function update(Task $task)
    {
        $task->body = request('body');
        $task->complete = request('complete');
        $task->save();

        return redirect('/tasks');
    }


    public function destroy(Task $task)
    {
        $task->delete($task);

        return redirect('/tasks');

    }
}

