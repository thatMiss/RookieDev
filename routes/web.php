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

Route::get('/', "App\Http\Controllers\WelcomeController@welcome")->name('welcome-page');

Route::get('/contact',"App\Http\Controllers\PageController@getContactPage")->name('contact');

Route::get('/news',"App\Http\Controllers\PageController@getNewsPage")->name('news');

Route::get('/wanted-criminals',"App\Http\Controllers\PageController@getCriminalsPage")->name('criminals');

Route::get('/report-crime',"App\Http\Controllers\PageController@getCrimeReportPage")->name('report-crime');

Route::get('/report-accident',"App\Http\Controllers\PageController@getAccidentReportPage")->name('report-accident');

Route::get('/report-missing',"App\Http\Controllers\PageController@getMissingPage")->name('report-missing');

Route::get('/admin/dashboard', "App\Http\Controllers\HomeController@getDashboard")->middleware(['auth'])->name('dashboard');

Route::get('/admin/profile', "App\Http\Controllers\HomeController@getAdminProfile")->middleware(['auth'])->name('admin-profile');

Route::resource('/admin/users',"App\Http\Controllers\AdminController");

require __DIR__.'/auth.php';
