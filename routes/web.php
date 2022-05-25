<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ForumArticleController;
use App\Http\Controllers\DirectoryController;
use \App\Http\Controllers\CustomAuthController;
use \App\Http\Controllers\LocalizationController;

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

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/student/create/student', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/create/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/edit', [StudentController::class, 'update'])->middleware('auth');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->middleware('auth');

Route::get('/forum', [ForumArticleController::class, 'index'])->name('forum')->middleware('auth');
Route::get('/forum/{forumArticle}', [ForumArticleController::class, 'show'])->name('forum.show')->middleware('auth');
Route::get('/forum/create/article', [ForumArticleController::class, 'create'])->name('forum.create')->middleware('auth');
Route::post('/forum/create/article', [ForumArticleController::class, 'store'])->name('forum.store')->middleware('auth');
Route::get('forum/{forumArticle}/edit', [ForumArticleController::class, 'edit'])->name('forum.edit')->middleware('auth');
Route::put('forum/{forumArticle}/edit', [ForumArticleController::class, 'update'])->middleware('auth');
Route::delete('forum/{forumArticle}', [ForumArticleController::class, 'destroy'])->middleware('auth');
Route::get('forum/{forumArticle}/PDF', [ForumArticleController::class, 'showPdf'])->name('forum.pdf')->middleware('auth');

Route::get('/directory', [DirectoryController::class, 'index'])->name('directory')->middleware('auth');
Route::get('/directory/{directory}', [DirectoryController::class, 'show'])->name('directory.show')->middleware('auth');
Route::get('/directory/create/file', [DirectoryController::class, 'create'])->name('directory.create')->middleware('auth');
Route::post('/directory/create/file', [DirectoryController::class, 'store'])->name('directory.store')->middleware('auth');
Route::get('/directory/{directory}/edit', [DirectoryController::class, 'edit'])->name('directory.edit')->middleware('auth');
Route::put('/directory/{directory}/edit', [DirectoryController::class, 'update'])->middleware('auth');
Route::delete('/directory/{directory}', [DirectoryController::class, 'destroy'])->middleware('auth');
Route::get('directory/{directory}/download', [DirectoryController::class, 'download'])->name('directory.download')->middleware('auth');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('custom.login');
Route::get('registration', [CustomAuthController::class, 'create'])->name('registration');;
Route::post('custom-registration', [CustomAuthController::class, 'store'])->name('custom.registration');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang');