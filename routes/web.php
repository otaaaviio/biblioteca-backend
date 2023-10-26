<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function () {
    return 'Hello, World!';
});

Route::post('/livros', [BookController::class, 'store']);

Route::get('/livros', [BookController::class, 'index']);

Route::get('/livros/{id}', [BookController::class, 'show']);

Route::put('/livros/{id}', [BookController::class, 'update']);

Route::delete('/livros/{id}', [BookController::class, 'delete']);