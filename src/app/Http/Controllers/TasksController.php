<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\TasksRequest;

class TasksController extends Controller
{
    public function index()
    {
        $currentUserId = Auth::id();
        $user = Auth::user();
        $tasks = Task::where('user_id', $currentUserId)->orderBy('updated_at', 'desc')->get();
        return view('tasks.index', compact('tasks', 'user'));
    }

    public function show($id)
    {
        $currentUserId = Auth::id();
        $task = Task::find($id);
        if (!empty($task) && $task->user_id === $currentUserId) {
            return view('tasks.show', compact('task'));
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }

    public function add()
    {
        return view('tasks.add');
    }
    public function store(TasksRequest $request)
    {

        Task::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return redirect()->route('tasks.index');
    }
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }
    public function update(TasksRequest $request, $id)
    {
        $task = Task::find($id);

        $task->fill([
            'name' => $request->name,
            'state' => $request->state,
            'content' => $request->content,
        ])
            ->save();

        return redirect()->route('tasks.index');
    }
    public function delete($id)
    {
        $task = Task::destroy($id);

        return redirect()->route('tasks.index');
    }
}
