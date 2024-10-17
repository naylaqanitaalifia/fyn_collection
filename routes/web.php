<?php

use App\Models\Gallery;
use App\Models\OutfitInspiration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OutfitInspirationController;

// use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// ->middleware(['auth', 'verified'])


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/create', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
});

Route::prefix('service')->name('service.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/create', [ServiceController::class, 'create'])->name('create');
    Route::post('/create', [ServiceController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [ServiceController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ServiceController::class, 'destroy'])->name('delete');
});

Route::prefix('outfit-inspiration')->name('outfit-inspiration.')->group(function () {
    Route::get('/', [OutfitInspirationController::class, 'index'])->name('index');
    Route::get('/create', [OutfitInspirationController::class, 'create'])->name('create');
    Route::post('/create', [OutfitInspirationController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [OutfitInspirationController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [OutfitInspirationController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [OutfitInspirationController::class, 'destroy'])->name('delete');
});

Route::prefix('gallery')->name('gallery.')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('index');
    Route::get('/create', [GalleryController::class, 'create'])->name('create');
    Route::post('/create', [GalleryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [GalleryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('delete');
});

Route::prefix('landing-page')->name('landing-page.')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('index');
});

Route::prefix('order')->name('order.')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::get('/create/{id}', [OrderController::class, 'create'])->name('create');
    Route::post('/create', [OrderController::class, 'store'])->name('store');
    Route::post('/edit/{id}', [OrderController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [OrderController::class, 'update'])->name('update');


});

require __DIR__.'/auth.php';