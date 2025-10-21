<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('/', function () {
    return view('welcome');
});
