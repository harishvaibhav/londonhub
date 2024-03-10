<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AnalyticController;
use App\Http\Controllers\AuthController;

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


Route::get('', [AuthController::class, 'index'])->name('login');


// Authentication Routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
// End of Authentication Routes

// resource which is laravel helper whichi will helps us to generate REST API structured routes
// Post Related Routes 
Route::resource("posts", PostController::class);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}/edit', [PostController::class, 'update']);

// Comments Related Routes
Route::resource("comments", CommentController::class);


// Analytics Related Routes
Route::resource("analytics", AnalyticController::class);
Route::get("/view-analytics", [AnalyticController::class, 'showAnalytics']);
