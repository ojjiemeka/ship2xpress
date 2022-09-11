<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);

Route::get('/services', [App\Http\Controllers\PagesController::class, 'services']);

Route::get('/process', [App\Http\Controllers\PagesController::class, 'process']);

Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('Search');


Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add_tracking', [App\Http\Controllers\HomeController::class, 'add_tracking'])->name('Add_Tracking Details');

Route::get('/add_c_details', [App\Http\Controllers\HomeController::class, 'c_details'])->name('Add_Client_Details');

Route::get('/add_p_details', [App\Http\Controllers\HomeController::class, 'p_details'])->name('Add_Package_Details');

Route::get('/view_detail', [App\Http\Controllers\HomeController::class, 'view_details'])->name('view_Details');

Route::get('/view_c_details', [App\Http\Controllers\HomeController::class, 'view_c_details'])->name('view_Client_Details');

Route::get('/view_p_details', [App\Http\Controllers\HomeController::class, 'view_p_details'])->name('view_Package_Details');

Route::get('/view_tracking_detail', [App\Http\Controllers\HomeController::class, 'view_tracking'])->name('view_tracking');

Route::resource('clients',App\Http\Controllers\ClientController::class);

Route::resource('packages',App\Http\Controllers\PackageController::class);

Route::resource('trackings',App\Http\Controllers\TrackingController::class);





