<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;



//project
Route::get('/project/{id}/{pid}', [ProjectController::class,'show'])->name("showProject");

//projects
Route::get('/projects', [ProjectController::class,'list'])->name("projects");

Route::get('/search', [ProjectController::class, 'path']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/create',[App\Http\Controllers\HomeController::class, 'createLayout'])->name('home.createProject');

Route::post('home/createProject',[App\Http\Controllers\HomeController::class, 'createProject'])->name('home.create');

Route::get('/home/{pid}', [App\Http\Controllers\HomeController::class, 'editLayout'])->name('home.project');

Route::post('/home/edit', [App\Http\Controllers\HomeController::class, 'editProject'])->name('home.edit');



