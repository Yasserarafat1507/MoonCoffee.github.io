<?php

use App\Http\Controllers\DaiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('tb');
// });

Route::get('/', [DaiController::class, 'index']);

Route::get('/form', [DaiController::class, 'add']);

Route::post('/store', [DaiController::class, 'store']);

Route::get('/{id}/edit', [DaiController::class, 'edit']);

Route::put('/update/{id}', [DaiController::class, 'update']);

Route::delete('/update/{id}', [DaiController::class, 'destroy']);