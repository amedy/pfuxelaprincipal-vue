<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PfuxelaclienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', [PfuxelaclienteController::class, 'index'])->name('home');
Route::prefix('/home')->group( function(){
        Route::post('/store', [PfuxelaclienteController::class, 'store']);
        Route::put('/{id}', [PfuxelaclienteController::class, 'update']);
        Route::delete('/{id}', [PfuxelaclienteController::class, 'destroy']);
    }
);