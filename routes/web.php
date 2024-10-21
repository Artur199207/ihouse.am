<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CategoryController1;
use App\Http\Controllers\Admin\NewCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\SomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\TutorialController;
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('tutorial/{category_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);

Route::get('post/{slug}', [FrontendController::class, 'viewPost'])->name('frontend.viewPost');

Route::get('/categs', [FrontendController::class, 'categs'])->name('categs');

// routes/web.php

// routes/web.php
// routes/web.php
Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');
Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listings.show');

Route::get('tutorial/{id}', [FrontendController::class, 'viewCategory'])->name('tutuorial.show');

Route::get('/exclusive/{category_slug}', [FrontendController::class, 'viewCategoryPostExclusive'])->name('exclusive.show');
Route::get('/land/{slug}', [FrontendController::class, 'viewCategoryPostLand'])->name('land.show');

Route::get('/banner/{id}', [FrontendController::class, 'viewBanner'])->name('banner.show');










// Route::get('/newlistings', function () {
//     return view('newlistings.index');
// })->name('newlistings.index');
Route::get('/agents', function () {
    return view('agents');
})->name('agents');
Route::get('/aboute', function () {
    return view('aboute');
})->name('aboute');

Route::get('/evaluation', function () {
    return view('evaluation');
})->name('evaluation');
Route::get('/mail', function () {
    return view('email');
})->name('email');
Route::get('/', [FrontendController::class, 'index']);
Route::get('/filter-categories', [App\Http\Controllers\Admin\CategoryController::class, 'filter'])->name('filter.categories');
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);



    Route::get('newcategory', [App\Http\Controllers\Admin\NewCategoryController::class, 'index']);
    Route::get('add-newcategory', [App\Http\Controllers\Admin\NewCategoryController::class, 'create']);
    Route::post('add-newcategory', [App\Http\Controllers\Admin\NewCategoryController::class, 'store']);
    Route::get('edit-newcategory/{category_id}', [App\Http\Controllers\Admin\NewCategoryController::class, 'edit']);
    Route::put('update-newcategory/{category_id}', [App\Http\Controllers\Admin\NewCategoryController::class, 'update']);
    Route::get('delete-newcategory/{category_id}', [App\Http\Controllers\Admin\NewCategoryController::class, 'destroy']);



    Route::get('exclusive', [App\Http\Controllers\Admin\ExclusiveController::class, 'index']);
    Route::get('add-exclusive', [App\Http\Controllers\Admin\ExclusiveController::class, 'create']);
    Route::post('add-exclusive', [App\Http\Controllers\Admin\ExclusiveController::class, 'store']);
    Route::get('edit-exclusive/{category_id}', [App\Http\Controllers\Admin\ExclusiveController::class, 'edit']);
    Route::put('update-exclusive/{category_id}', [App\Http\Controllers\Admin\ExclusiveController::class, 'update']);
    Route::get('delete-exclusive/{category_id}', [App\Http\Controllers\Admin\ExclusiveController::class, 'destroy']);


    Route::get('land', [App\Http\Controllers\Admin\LandController::class, 'index']);
    Route::get('add-land', [App\Http\Controllers\Admin\LandController::class, 'create']);
    Route::post('add-land', [App\Http\Controllers\Admin\LandController::class, 'store']);
    Route::get('edit-land/{category_id}', [App\Http\Controllers\Admin\LandController::class, 'edit']);
    Route::put('update-land/{category_id}', [App\Http\Controllers\Admin\LandController::class, 'update']);
    Route::get('delete-land/{category_id}', [App\Http\Controllers\Admin\LandController::class, 'destroy']);



    Route::get('banner', [App\Http\Controllers\Admin\BannerController::class, 'index']);
    Route::get('add-banner', [App\Http\Controllers\Admin\BannerController::class, 'create']);
    Route::post('add-banner', [App\Http\Controllers\Admin\BannerController::class, 'store']);
    Route::get('edit-banner/{category_id}', [App\Http\Controllers\Admin\BannerController::class, 'edit']);
    Route::put('update-banner/{category_id}', [App\Http\Controllers\Admin\BannerController::class, 'update']);
    Route::get('delete-banner/{category_id}', [App\Http\Controllers\Admin\BannerController::class, 'destroy']);



});




Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
// Route::prefix('admin')->middleware('auth')->group(function() {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });