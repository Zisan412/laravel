<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use App\Http\Middleware\DummyAuth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',function(){
    return "welcome to laravel";
});

Route::get('/tasks',function(){
    $tasks = ['buy milk', 'okay', 'done'];
    return $tasks;
}); 

Route::get('/task/{name}',function($name){
    return "Task : ".$name;
});

Route::get('/task/{name}/{priority}',function($name,$priority){
    return "Name :".$name." and priority will be ".$priority;
});

Route::get('/tasklist',function(){
    return view('tasklist');
});

Route::get('/tasklist10',function(){
    return view('tasklist10');
});

Route::get('/task11',function(){
    return view('task11')->with('title','my task');

});

Route::get('/task12',function(){
    $title='my task';
    $task='Study laravel';
    $status='Pending';
    return view('task12',compact('title','task','status'));
});

Route::get('/task13',function(){
    return view('task13');
});

Route::get('/task14',function(){
    return view('task14');
});

Route::get('/task15',function(){
    return view('task15');
});

Route::get('/task16', function () {
    $tasks = ['Buy Milk', 'Do Laundry', 'Study Laravel'];
    return view('task16', compact('tasks'));
});

Route::get('/task17', function () {
    $completed = true;
    return view('task17', compact('completed'));
});

Route::get('/task18', function () {
    $tasks = [];
    return view('task18', compact('tasks'));
});

Route::get('/task19', function () {
    $status = 'completed';
    return view('task19', compact('status'));
});

Route::get('/task20', function () {
    return view('task20');
});

Route::get('/task21', function () {
    return view('task21');
});

Route::get('/task22', function () {
    return view('task22');
});

Route::get('/task23', function () {
    return view('task23');
});
Route::post('/tasks/store', function () {
    return "Form submitted successfully!";
});//for 23

Route::get('/task24', function () {
    return view('task24');
});

Route::post('/task24/store',[TaskController::class, 'store']);//for 24

Route::get('/task25',function(){
    return view('task25');
});

Route::post('/task25/store',[TaskController::class, 'store25']);

Route::get('/task26',function(){
    return view('task26');
});

Route::post('/task26/store',[TaskController::class, 'store26']);

Route::get('/task27',function(){
    return view('task27');
});

Route::post('/task27/store',[TaskController::class, 'store27']);

Route::get('/task28', function () {
    return view('task28');
});

Route::post('/task28/store', [TaskController::class, 'store28']);

Route::get('/task29', function () {
    return view('task29');
});

Route::post('/task29/store', [TaskController::class, 'store29']);

Route::get('/task30',function(){
    return view('task30');
});

Route::post('/task30/store',[TaskController::class ,'store30']);

Route::get('/task32',[TaskController::class,'index']);
Route::post('/task32/store',[TaskController::class,'store32']);

Route::get('/task33', [TaskController::class, 'index33']);

Route::get('/task34/create', [TaskController::class, 'create34']);

Route::get('/task35', function () {
    return view('task35');
});

Route::post('/task35/store', [TaskController::class, 'store35']);

Route::get('/task36', function () {
    return view('task36');
});

Route::post('/task36/store', [TaskController::class, 'store36'])->name('task.store');

Route::get('/task37/{id}', [TaskController::class, 'show37']);

//38 same as 37 

Route::get('/task39', function(){
    return "Login Page";
});

Route::get('/task39/create', [TaskController::class, 'create'])->middleware(DummyAuth::class);

Route::resource('task40', TaskController::class);

Route::get('/task45', function () {
    return view('task45');
});
Route::post('/task45/store', [TaskController::class, 'store45']);

Route::get('/task46', [TaskController::class, 'index46']);


Route::get('/task47/{task}', [TaskController::class, 'edit47']);
Route::put('/task47/{task}', [TaskController::class, 'update47']);

Route::delete('/task48/{task}', [TaskController::class, 'destroy48']); //to use this delete route use this url /task46 in browser