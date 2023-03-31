<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aprendiz\TasksController;
Route::middleware(['role:aprendiz','auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
  Route::get('tareas',[TasksController::class, 'index']);
});