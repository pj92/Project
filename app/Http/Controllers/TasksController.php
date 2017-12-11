<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        #$tasks = DB::table('tasks')->get();

        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create', compact('task'));
    }

    public function store()
    {
        $this->validate(request(), [

            'body' => 'required'
        ]);


        Task::create(request(['body']));

         return redirect('/tasks');

    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $task = Task::find($task->id);
        return view('tasks.edit',compact('task'));
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

