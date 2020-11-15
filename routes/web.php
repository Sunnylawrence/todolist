<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
use App\Models\User;
use App\Models\todo;



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
    return view('welcome');
});

Route::get('/todo/all',[todoController::class, 'alltodo'])->name('all.todo');

Route::get('/todo/edit/{id}',[todoController::class, 'Edit']);
Route::post('todo/update/{id}',[todoController::class, 'Update']);
Route::get('todo/delete/{id}',[todoController::class, 'delete']);

Route::post('/todo/add',[todoController::class, 'addtodo'])->name('store.todo');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { 

    $users = user::all();
    return view('dashboard', compact('users'));
})->name('dashboard');
