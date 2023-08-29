<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;

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



Route::prefix('/news')->group(function (){
    Route::get('/',[NewsController::class,'news'])->name('news');
    Route::post('/add-news',[NewsController::class,'saveNews'])->name('save.news');

});
Route::get('/view-data',[NewsController::class,'viewData'])->name('view.data');
Route::get('/book-add',[NewsController::class,'bookAdd'])->name('book.add');
Route::get('/books',[NewsController::class,'books'])->name('books');
Route::post('/add-book',[NewsController::class,'addBook'])->name('add.book');
Route::get('/book-update/{id}',[NewsController::class,'bookUpdate'])->name('book.update');
Route::put('/updateBook/{id}',[NewsController::class,'updateBook'])->name('update.Book');
Route::post('delete-book',[NewsController::class,'deleteBook'])->name('delete.book');





//Route::get('/', function () {
//    return view('welcome');
//});
