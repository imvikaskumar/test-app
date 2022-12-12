<?php

use App\Http\Controllers\BookController;
use App\Models\IssueBook;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Models\OverTimeKeppingBookDue;

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

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], "/books", [BookController::class, "index"])->name("books.index");
Route::get('/issue-book/{book_id}', [BookController::class, "issueBook"])->name("book.issue");