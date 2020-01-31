<?php

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

// Main Dashboard
Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

// Dashboard template
Route::get('/template', function () {
    $professores = App\Professor::take(3)->latest()->get();
    $users = App\User::take(3)->latest()->get();
    return view('dashboard-template', ['professores' => $professores, 'users' => $users]);
})->middleware('auth');

// Tables template
Route::get('/tables', function () {
    return view('tables-template');
})->middleware('auth');

// Login Page
Route::get('/login', function () {
    return view('auth.login');
});

// Auth
Auth::routes(['register' => false]);

// Logout Method
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Professor
Route::resource('professor', 'ProfessorController')->middleware('auth');

// User
Route::resource('user', 'UserController')->middleware('auth');

// Turma
Route::resource('turma', 'TurmaController')->middleware('auth');

// Local
Route::resource('local', 'LocalController')->middleware('auth');