<?php

use App\Http\Controllers\AminitiesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategariesController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NearbyController;
use App\Http\Controllers\SocialController;

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
Route::get('admin/property/destroy/{id}', [PropertyController::class, 'destroy'])->name('admin.property.destroy');

//Setting
Route::get('admin/setting/edit', [SettingController::class, 'edit'])->name('admin.setting.edit');
Route::post('admin/setting/update', [SettingController::class, 'update'])->name('admin.setting.update');

Route::post('admin/setting/header_logo_update', [SettingController::class, 'header_logo_update'])->name('admin.setting.header_logo_update');
Route::post('admin/setting/footer_logo', [SettingController::class, 'footer_logo'])->name('admin.setting.footer_logo');
Route::post('admin/setting/favicon_update', [SettingController::class, 'favicon_update'])->name('admin.setting.favicon_update');
Route::post('admin/setting/preloader_update', [SettingController::class, 'preloader_update'])->name('admin.setting.preloader_update');
Route::post('admin/setting/setting_update', [SettingController::class, 'setting_update'])->name('admin.setting.setting_update');
Route::post('admin/setting/preloader_update', [SettingController::class, 'preloader_update'])->name('admin.setting.preloader_update');
Route::post('admin/setting/seo_update', [SettingController::class, 'seo_update'])->name('admin.setting.seo_update');


// Aminities controller
Route::get('/aminities', [AminitiesController::class, 'index'])->name('aminities.page');
Route::post('/aminitiescreate', [AminitiesController::class, 'create'])->name('aminities.create.page');
Route::get('/aminitiesshow', [AminitiesController::class, 'show'])->name('aminities.show.page');
Route::get('/aminitiesedit/{id}', [AminitiesController::class, 'edit'])->name('aminities.edit.page');
Route::post('/aminitiesupdate', [AminitiesController::class, 'update'])->name('aminities.update.page');
Route::get('/aminitiesdestroy/{id}', [AminitiesController::class, 'destroy'])->name('aminities.delete.page');

// Categaries controller
Route::get('/categaries', [CategariesController::class, 'index'])->name('categaries.page');
Route::post('/categariesstore', [CategariesController::class, 'store'])->name('categaries.create.page');
Route::get('/categariesshow', [CategariesController::class, 'show'])->name('categaries.show.page');
Route::get('/categariesedit/{id}', [CategariesController::class, 'edit'])->name('categaries.edit.page');
Route::post('/categariesupdate', [CategariesController::class, 'update'])->name('categaries.update.page');
Route::get('/categariesdestroy/{id}', [CategariesController::class, 'destroy'])->name('categaries.destroy.page');

// Near by controller
Route::get('/nearby', [NearbyController::class, 'index'])->name('nearby.page');
Route::post('/nearbystore', [NearbyController::class, 'store'])->name('nearby.create.page');
Route::get('/nearbyshow', [NearbyController::class, 'show'])->name('nearby.show.page');
Route::get('/nearbyedit/{id}', [NearbyController::class, 'edit'])->name('nearby.edit.page');
Route::post('/nearbyupdate', [NearbyController::class, 'update'])->name('nearby.update.page');
Route::get('/nearbyupdelete/{id}', [NearbyController::class, 'destroy'])->name('nearby.delete.page');

// Blog Controller

Route::get('/blog', [BlogController::class, 'index'])->name('blog.page');
Route::post('/blogcreate', [BlogController::class, 'blogstore'])->name('blog.insert.page');

Route::get('/blogcategaries', [BlogController::class, 'blogCategaries'])->name('blog.categaries.page');
Route::post('/blogcategariescreate', [BlogController::class, 'store'])->name('blog.create.page');
Route::get('/blogcategariesshow', [BlogController::class, 'show'])->name('blog.show.page');
Route::get('/blogcategariesedit/{id}', [BlogController::class, 'edit'])->name('blog.edit.page');
Route::post('/blogcategariesedit', [BlogController::class, 'update'])->name('blog.update.page');
Route::get('/blogcategariesdelete/{id}', [BlogController::class, 'destroy'])->name('blog.delete.page');
Route::get('/blogtag', [BlogController::class, 'blogTags'])->name('blog.tag.page');
//Social
Route::get('admin/social_link/create', [SocialController::class, 'index'])->name('admin.social_link.create');
Route::post('admin/social_link/store', [SocialController::class, 'store'])->name('admin.social_link.store');
Route::get('admin/social_link/create', [SocialController::class, 'create'])->name('admin.social_link.create');
Route::get('admin/social_link/show', [SocialController::class, 'show'])->name('admin.social_link.show');
Route::get('admin/social_link/edit/{id}', [SocialController::class, 'edit'])->name('admin.social_link.edit');
Route::post('admin/social_link/update', [SocialController::class, 'update'])->name('admin.social_link.update');
Route::get('admin/social_link/destory/{id}', [SocialController::class, 'destroy'])->name('admin.social_link.destory');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.page');
Route::post('/blogcreate', [BlogController::class, 'blogstore'])->name('blog.insert.page');
Route::get('/blogshow', [BlogController::class, 'blogShow'])->name('blog.select.page');
Route::get('/blogedit/{id}', [BlogController::class, 'blogEdit'])->name('blog.editblog.page');
Route::post('/blogupdate', [BlogController::class, 'blogUpdate'])->name('blog.updateblog.page');
Route::get('/blogdelete/{id}', [BlogController::class, 'blogDestroy'])->name('blog.deleteblog.page');

// blog Categories
Route::get('/blogcategaries', [BlogController::class, 'blogCategaries'])->name('blog.categaries.page');
Route::post('/blogcategariescreate', [BlogController::class, 'store'])->name('blog.create.page');
Route::get('/blogcategariesshow', [BlogController::class, 'show'])->name('blog.show.page');
Route::get('/blogcategariesedit/{id}', [BlogController::class, 'edit'])->name('blog.edit.page');
Route::post('/blogcategariesedit', [BlogController::class, 'update'])->name('blog.update.page');
Route::get('/blogcategariesdelete/{id}', [BlogController::class, 'destroy'])->name('blog.delete.page');

// blog tag 
Route::get('/blogtag', [BlogController::class, 'blogTags'])->name('blog.tag.page');
Route::post('/tagstore', [BlogController::class, 'tagStore'])->name('tag.store.page');
Route::get('/tagshow', [BlogController::class, 'tagShow'])->name('tag.show.page');
Route::get('/tagedit/{id}', [BlogController::class, 'tagEdit'])->name('tag.edit.page');
Route::post('/tagupdate', [BlogController::class, 'tagUpdate'])->name('tag.update.page');
Route::get('/tagdelete/{id}', [BlogController::class, 'tagDestroy'])->name('tag.delete.page');
