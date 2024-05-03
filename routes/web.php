<?php

use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/layout');
});

// layout controller
// Route::get('admin/layout',[LayoutController::class, 'index'])->name('layout.page');