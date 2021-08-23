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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin', [AdminMenuController::class, 'index'])->name('menu');

Route::get('/user', [AdminUserController::class, 'index'])->name('user');
Route::get('/title', [AdminTitleController::class, 'index'])->name('title');
Route::get('/site', [AdminSiteController::class, 'index'])->name('site');
Route::get('/me', [AdminMeController::class, 'index'])->name('me');
Route::get('/item', [AdminItemController::class, 'index'])->name('item');
Route::get('/work', [AdminWorkController::class, 'index'])->name('work');
Route::get('/contact', [AdminContactController::class, 'index'])->name('contact');

Route::post('/user/store/', [AdminUserController::class, 'store'])->name('user.store');
Route::post('/title/store/', [AdminTitleController::class, 'store'])->name('title.store');
Route::post('/site/store/', [AdminSiteController::class, 'store'])->name('site.store');
Route::post('/me/store/', [AdminMeController::class, 'store'])->name('me.store');
Route::post('/item/store/', [AdminItemController::class, 'store'])->name('item.store');
Route::post('/work/store/', [AdminWorkController::class, 'store'])->name('work.store');
Route::post('/contact/store/', [AdminContactController::class, 'store'])->name('contact.store');

Route::post('/user/update/{id}', [AdminUserController::class, 'update'])->name('user.update');
Route::post('/title/update/{id}', [AdminTitleController::class, 'update'])->name('title.update');
Route::post('/site/update/{id}', [AdminSiteController::class, 'update'])->name('site.update');
Route::post('/me/update/{id}', [AdminMeController::class, 'update'])->name('me.update');
Route::post('/item/update/{id}', [AdminItemController::class, 'update'])->name('item.update');
Route::post('/work/update/{id}', [AdminWorkController::class, 'update'])->name('wort.update');
Route::post('/contact/update/{id}', [AdminContactController::class, 'update'])->name('contact.update');