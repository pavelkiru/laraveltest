<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');




//Route::group(['namespace' => 'Post'],function () { dont work
Route::prefix('posts')->group(function () {
    Route::get('/', IndexController::class)->name('posts.index');
    Route::get('/create', CreateController::class)->name('posts.create');
    Route::post('/', StoreController::class)->name('posts.store');
    Route::get('/{post}', ShowController::class)->name('posts.show');
    Route::get('/{post}/edit', EditController::class)->name('posts.edit');
    Route::patch('/{post}', UpdateController::class)->name('posts.update');
    Route::delete('/{post}', DestroyController::class)->name('posts.delete');
});






Route::get('/posts/firstorcreate', [PostController::class, 'firstOrCreate']);
Route::get('/posts/updateorcreate', [PostController::class, 'updateOrCreate']);





