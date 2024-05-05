<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EditorController;
use App\Models\ContentType;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/', [MainController::class, 'index'])->name("main");
Route::get('/blog/{slug}', [MainController::class, 'blogs'])->name("redirected");


Route::get('/dashboard', function () {
    return Inertia::render('ContentWriter/Content');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/post', [EditorController::class, 'index'])->name("editor");
Route::get('/postList', [EditorController::class, 'lists'])->name("content.list");
Route::post('/postContent', [EditorController::class, 'create'])->name("postContent");
Route::get('/postContent', [EditorController::class, 'createView'])->name("post.Content");
Route::get('/ContentShow/{id}', [EditorController::class, 'show'])->name('show.content');
Route::post('/ContentEdit/{id}', [EditorController::class, 'update'])->name('edit.content');
Route::delete('/ContentDelete/{id}', [EditorController::class, 'destroy'])->name('destroy.content');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
