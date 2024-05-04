<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/layout');
});

// Property Controller
Route::get('admin/property/show', [PropertyController::class, 'index'])->name('admin.property.show');
Route::get('admin/property/create', [PropertyController::class, 'create'])->name('admin.property.create');
Route::post('admin/property/store', [PropertyController::class, 'store'])->name('admin.property.store');
Route::get('admin/property/show', [PropertyController::class, 'show'])->name('admin.property.show');
Route::get('admin/property/edit/{id}', [PropertyController::class, 'edit'])->name('admin.property.edit');
Route::post('admin/property/update', [PropertyController::class, 'update'])->name('admin.property.update');
//Setting
Route::get('admin/setting/edit', [SettingController::class, 'edit'])->name('admin.setting.edit');
Route::post('admin/setting/update', [SettingController::class, 'update'])->name('admin.setting.update');
