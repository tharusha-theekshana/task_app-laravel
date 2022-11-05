<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
$data=App\Models\Task::all();

return view('tasks')->with('tasks',$data);
});

Route::post('/savetask','App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}','App\Http\Controllers\TaskController@updateTaskAsCompleted');
Route::get('/markasNotcompleted/{id}','App\Http\Controllers\TaskController@updateTaskAsNotCompleted');
Route::get('/deletetask/{id}','App\Http\Controllers\TaskController@deleteTask');
Route::get('/updatetask/{id}','App\Http\Controllers\TaskController@UpdateTask');
Route::post('/updatetasks','App\Http\Controllers\TaskController@updateTasks');

