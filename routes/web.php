<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DanbrownController;
use App\Http\Controllers\JaneaustinController;
use App\Http\Controllers\MargaretatwoodController;
use App\Http\Controllers\CharlesdickensController;
use App\Http\Controllers\JKrowlingController;
use App\Http\Controllers\StephenkingController;
use App\Http\Controllers\JohngrishamController;
use App\Http\Controllers\LewiscarrollController;


// Route::get('/login' ,[SigninController::class,'index']);
Route::get('/register',[RegisterController::class, 'index']);

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/dashboard', [DashboardController::class, 'index']);
//     Route::get('/authors', [AuthorsController::class, 'index']);
//     Route::get('/books', [BooksController::class, 'index']);
// });

Route::get('/login', [SigninController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/authors', [AuthorsController::class, 'index']);
Route::get('/books', [BooksController::class, 'index']);

Route::get('/danbrown',[DanbrownController::class, 'index']);
Route::get('/austin',[JaneaustinController::class, 'index']);
Route::get('/atwood',[MargaretatwoodController::class, 'index']);
Route::get('/dickens',[CharlesdickensController::class, 'index']);
Route::get('/carroll',[LewiscarrollController::class, 'index']);
Route::get('/rowling',[JKrowlingController::class, 'index']);
Route::get('/stephen',[StephenkingController::class, 'index']);
Route::get('/grisham',[JohngrishamController::class, 'index']);
