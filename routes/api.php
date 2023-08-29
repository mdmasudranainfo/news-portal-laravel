<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;

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


Route::post('/test',[NewsController::class,'textApi']);
Route::get('/books-by-api',[NewsController::class,'showBooksByApi']);
Route::post('/addBook',[NewsController::class,'addBookApi']);
Route::post('/addBook/{id}',[NewsController::class,'deleteBooks']);
Route::get('book/{id}',[NewsController::class,'singleBook']);
Route::put('book-updates/{id}',[NewsController::class,'updateBooks']);


