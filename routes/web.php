<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', function(){
    return view('welcome');
});

//project
Route::get('/project/{id}/{pid}', [ProjectController::class,'show'])->name("showProject");

Route::get('/project/search', [ProjectController::class, 'path'])->name('projectSearch');

//projects
Route::get('/projects', [ProjectController::class,'list'])->name("showProjects");



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/create',[App\Http\Controllers\HomeController::class, 'createLayout'])->name('home.createProject');

Route::post('/home/create',[App\Http\Controllers\HomeController::class, 'createProject'])->name('home.create');

Route::get('/home/edit/{pid}', [App\Http\Controllers\HomeController::class, 'editLayout'])->name('home.editProject');

Route::post('/home/edit', [App\Http\Controllers\HomeController::class, 'editProject'])->name('home.edit');



