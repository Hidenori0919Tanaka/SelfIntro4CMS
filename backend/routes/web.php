<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminMenuController;

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminTitleController;
use App\Http\Controllers\AdminSiteController;
use App\Http\Controllers\AdminMeController;
use App\Http\Controllers\AdminItemController;
use App\Http\Controllers\AdminWorkController;
use App\Http\Controllers\AdminContactController;
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
//     return view('index');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin', [AdminMenuController::class, 'index']);

Route::get('/user', [AdminUserController::class, 'index'])->name('user');
Route::get('/title', [AdminTitleController::class, 'index'])->name('title');
Route::get('/site', [AdminSiteController::class, 'index'])->name('site');
Route::get('/me', [AdminMeController::class, 'index'])->name('me');
Route::get('/item', [AdminItemController::class, 'index'])->name('item');
Route::get('/work', [AdminWorkController::class, 'index'])->name('work');
Route::get('/contact', [AdminContactController::class, 'index'])->name('contact');
