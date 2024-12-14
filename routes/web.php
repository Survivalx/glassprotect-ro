<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSpecsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('app');
// });
Route::get('/', [ProductController::class, 'recent'])->name('home');

// Route::view('/', 'app')->name('home');
Route::view('/about', 'pages.about')->name('page.about');
// Route::view('/products', 'pages.products')->name('page.products');
Route::view('/projects', 'pages.projects');
Route::view('/blog', 'pages.blog');
Route::view('/contact', 'pages.contact');
Route::view('/policies', 'pages.policies');


// default routes middleware breeze auth
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::resource('products', ProductController::class);

Route::post('/products/{product}/specs', [ProductSpecsController::class, 'store'])->name('products.specs.store');

Route::delete('/products/{id}/specs', [ProductSpecsController::class, 'destroy'])->name('products.specs.destroy');

