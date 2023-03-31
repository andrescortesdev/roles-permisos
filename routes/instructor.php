<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\TasksController;
Route::middleware(['role:instructor','auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::resource('tareas',TasksController::class);
}); 
