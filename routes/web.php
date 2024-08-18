<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CategoryController1;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SomeController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('tutorial/{category_id}',[App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);
Route::get('/listings', [ListingController::class, 'index'])->name('listings.index');
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



    Route::get('categ', [CategoryController1::class, 'index'])->name('admin.categ.index');
    Route::get('add-categ', [CategoryController1::class, 'create'])->name('admin.categ.create');
    Route::post('add-categ', [CategoryController1::class, 'store'])->name('admin.categ.create');
    Route::get('edit-categ/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::post('delete-categ/{id}', [CategoryController1::class, 'destroy'])->name('admin.categ.delete');
    Route::get('delete-categ/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
Route::put('update-categ/{categ_id}', [CategoryController1::class, 'update'])->name('admin.categ.update');





    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-posts', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-posts', [App\Http\Controllers\Admin\PostController::class, 'store']);


});




Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
    Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
// Route::prefix('admin')->middleware('auth')->group(function() {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });