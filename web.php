<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('checkadmin');


Route::get('/unauthorized', function () {
    return view('unauthorized');
});
use App\Models\Category;

Route::get('/products', function () {
    $categories = Category::with('products')->get();
    return view('products.index', compact('categories'));
});


