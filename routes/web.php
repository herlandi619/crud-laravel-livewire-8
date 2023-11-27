<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Article;
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
    return view('welcome');
});
Route::get('/tutorial', function () {
    return view('tutorial');
});
Route::get('/users', function () {
    return view('users.index');
})->name('home');

Route::get('/users/show/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');

Route::get('/article', Article::class)->name('article');
