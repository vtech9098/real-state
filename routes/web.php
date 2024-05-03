<?php

use App\Http\Controllers\AminitiesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategariesController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\NearbyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/layout');
});

// Aminities controller
Route::get('/aminities',[AminitiesController::class, 'index'])->name('aminities.page');

// Categaries controller
Route::get('/categaries',[CategariesController::class, 'index'])->name('categaries.page');

// Near by controller
Route::get('/nearby',[NearbyController::class, 'index'])->name('nearby.page');

// Blog Controller
Route::get('/blog',[BlogController::class, 'index'])->name('blog.page');
Route::get('/blogcategaries',[BlogController::class, 'blogCategaries'])->name('blog.categaries.page');
Route::get('/blogtag',[BlogController::class, 'blogTags'])->name('blog.tag.page');
