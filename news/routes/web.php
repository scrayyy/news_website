<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/',[GuestController::class, 'index'])->name('index');
Route::get('/category/{id}', [GuestController::class, 'category'])->name('category');
Route::get('/post/{id}', [GuestController::class, 'post'])->name('post');
Route::get('/search', [GuestController::class, 'search'])->name('search');





Route::prefix('adminadmin')->name('admin.')->group(function() { 
    Auth::routes();
    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
    Route::get('/',[AdminIndexController::class, 'index'])->name('index');
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/cat', AdminCategoryController::class);
});
