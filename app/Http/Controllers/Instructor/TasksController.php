<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('instructor.tasks.index',compact('tasks'));
    }

    public function show($id){
        $task = Task::find($id);
        return $task;
        return view('instructor.tasks.show');
    }

    public function create(){
        return view('instructor.tasks.create');
    }

    public function store(Request $request){
        $task = Task::create($request->all());
        return redirect()->route('tareas.index')->with('success','Se ha creado una nueva tarea');
    }
    
    public function update(Request $request, $id){

       $task = Task::find($id)->update($request->all());
       return back()->with('success','Se ha actualizado correctamente la tarea');
    }

    public function destroy($id){
      $task = Task::find($id)->delete();

      return back()->with('success','Se ha eliminado correctamente la tarea');
    } 
}
