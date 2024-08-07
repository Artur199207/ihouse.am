<?php
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\SomeController; 
// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\ListingController;
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

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-posts', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-posts', [App\Http\Controllers\Admin\PostController::class, 'store']);


});




Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
    Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
// Route::prefix('admin')->middleware('auth')->group(function() {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });