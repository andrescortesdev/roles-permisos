<?php

namespace App\Http\Controllers\Aprendiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('aprendiz.tasks.index',compact('tasks'));
    }
}
