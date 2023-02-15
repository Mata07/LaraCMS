<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontpageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontpageController::class, 'index']);
Route::get('/frontpage', [FrontpageController::class, 'index']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);    
});

Route::get('/posts/publish/{post}', [PostController::class, 'publish'])->name('publish');

Route::get('/showBlogPost/{post}', [FrontpageController::class, 'show'])->name('showBlogPost');

Route::get('/about', [FrontpageController::class, 'about'])->name('about');
Route::get('/contact', [FrontpageController::class, 'contact'])->name('contact');
