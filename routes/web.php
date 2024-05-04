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
Route::post('/aminitiescreate',[AminitiesController::class, 'create'])->name('aminities.create.page');
Route::get('/aminitiesshow',[AminitiesController::class, 'show'])->name('aminities.show.page');
Route::get('/aminitiesedit/{id}',[AminitiesController::class, 'edit'])->name('aminities.edit.page');
Route::post('/aminitiesupdate',[AminitiesController::class, 'update'])->name('aminities.update.page');
Route::get('/aminitiesdestroy/{id}',[AminitiesController::class, 'destroy'])->name('aminities.delete.page');

// Categaries controller
Route::get('/categaries',[CategariesController::class, 'index'])->name('categaries.page');
Route::post('/categariesstore',[CategariesController::class, 'store'])->name('categaries.create.page');
Route::get('/categariesshow',[CategariesController::class, 'show'])->name('categaries.show.page');
Route::get('/categariesedit/{id}',[CategariesController::class, 'edit'])->name('categaries.edit.page');
Route::post('/categariesupdate',[CategariesController::class, 'update'])->name('categaries.update.page');
Route::get('/categariesdestroy/{id}',[CategariesController::class, 'destroy'])->name('categaries.destroy.page');

// Near by controller
Route::get('/nearby',[NearbyController::class, 'index'])->name('nearby.page');
Route::post('/nearbystore',[NearbyController::class, 'store'])->name('nearby.create.page');
Route::get('/nearbyshow',[NearbyController::class, 'show'])->name('nearby.show.page');
Route::get('/nearbyedit/{id}',[NearbyController::class, 'edit'])->name('nearby.edit.page');
Route::post('/nearbyupdate',[NearbyController::class, 'update'])->name('nearby.update.page');
Route::get('/nearbyupdelete/{id}',[NearbyController::class, 'destroy'])->name('nearby.delete.page');

// Blog Controller
Route::get('/blog',[BlogController::class, 'index'])->name('blog.page');
Route::post('/blogcreate',[BlogController::class, 'blogstore'])->name('blog.insert.page');

Route::get('/blogcategaries',[BlogController::class, 'blogCategaries'])->name('blog.categaries.page');
Route::post('/blogcategariescreate',[BlogController::class, 'store'])->name('blog.create.page');
Route::get('/blogcategariesshow',[BlogController::class, 'show'])->name('blog.show.page');
Route::get('/blogcategariesedit/{id}',[BlogController::class, 'edit'])->name('blog.edit.page');
Route::post('/blogcategariesedit',[BlogController::class, 'update'])->name('blog.update.page');
Route::get('/blogcategariesdelete/{id}',[BlogController::class, 'destroy'])->name('blog.delete.page');

Route::get('/blogtag',[BlogController::class, 'blogTags'])->name('blog.tag.page');
