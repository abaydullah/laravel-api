<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
            return TaskResource::collection(Task::where('is_completed', false)->get());
    }

    public function store(Request $request){
        $task = Task::create($request->only(['title']));

        return new TaskResource($task);
    }

    public function update(Request $request, $id){


        $task = Task::findOrFail($id);

        $task->update($request->only(['is_completed']));

        return new TaskResource($task);
    }

}
