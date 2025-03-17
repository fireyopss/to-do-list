<?php

use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DeleteController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\MarkCompletedController;
use App\Http\Controllers\Task\UpdateController;
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

Route::get('/', IndexController::class)->name('tasks.index');
Route::post('/task', CreateController::class)->name('tasks.store');
Route::delete('/task/{task}', DeleteController::class)->name('tasks.destroy');
Route::patch('/task/{task}/completed', MarkCompletedController::class)->name('tasks.completed');
Route::put('/task/{task}', UpdateController::class);