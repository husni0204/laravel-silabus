<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TugasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Belajar Laravel';
// return view('welcome');
// });


// $appName = 'Laravel 9';
// Route::view('/', 'home', ['appName' => $appName]);

// Route home normal
// Route::view('/', 'home2');

// Route home dengan controller
// Route::get('/', [HomeController::class, 'index']);

// Route home dengan controller __invoke
Route::get('/', HomeController::class);

// Route::get('/about', fn () => view('about'));
// Route::get('/about', fn () => view('about2'));

// Route::get('/profile', function () {
//     $name = "Husni";
//     return view('profile', [
//         'name' => $name
//     ]);
// });
// normal URL
// Route::get('/profile', fn () => view('profile2'));

// Request URL
// Route::get('/profile', function (Request $request) {
//     $name = $request->name;
//     return view('profile2', ['name' => $name]);
// });

// Wildcard URL
// Route::get('/profile/{username}', function ($username) {
//     return view('profile2', ['name' => $username]);
// });

// Passing Request
Route::get('/profile/{identifier}', [ProfileInformationController::class, '__invoke']);

Route::view('/post', 'posts.first-post');

// Route controller aboutpage
Route::get('/about', [AboutController::class, 'create']);
Route::post('/about', [AboutController::class, 'store']);

// Route controller tugas
Route::get('/tugas', [TugasController::class, 'index']);

// Route controller tugas create
// Route::get('/tugas/create', [TugasController::class, 'create']);

// Route controller tugas store
Route::post('/tugas', [TugasController::class, 'store']);

// Route controller tugas edit
Route::get('/tugas/{id}/edit', [TugasController::class, 'edit']);
Route::put('/tugas/{id}', [TugasController::class, 'update']);

// Route controller delete data
Route::delete('/tugas/{id}', [TugasController::class, 'destroy']);
