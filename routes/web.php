<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('welcome');
})->name("welcome");
//? Article Routes
Route::get("/article-create", [ArticleController::class, "create"])->name("article.create");
Route::get("/articles-index", [ArticleController::class, "index"])->name("article.index");
Route::get("/article-edit/{article_id}", [ArticleController::class, "edit"])->name("article.edit");
Route::get("/article-show/{article_id}", [ArticleController::class, "show"])->name("article.show");
