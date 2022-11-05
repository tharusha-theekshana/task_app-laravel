<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $task = new Task;

        $this->validate($request, [
            'task' => 'required|max:200|min:5',
        ]);


        $task->task = $request->task;
        $task->save();
        $Taskdata = Task::all();
        return redirect()->back();
        return view('tasks')->with('tasks', $Taskdata);
        
    }

    public function updateTaskAsCompleted($id)
    {
        $task = Task::find($id);
        $task->iscompleted = 1;
        $task->save();
        return redirect()->back();
    }

    public function updateTaskAsNotCompleted($id)
    {
        $task = Task::find($id);
        $task->iscompleted = 0;
        $task->save();
        return redirect()->back();
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function updateTask($id)
    {
        $task = Task::find($id);
        return view('updatetask')->with('taskdata',$task);
        
        
    }

    public function updateTasks(Request $request)
    {
        $id=$request->id;
        $task=$request->taskname;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();

        $datas = Task::all();
        return redirect('/');
        return view('tasks')->with('tasks', $datas);
        
    }
}
