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

Route::get('/list-missing',"App\Http\Controllers\PageController@getListMissingPage")->name('list-missing');

Route::get('/wanted-criminals',"App\Http\Controllers\PageController@getCriminalsPage")->name('criminals');

Route::get('/report-crime',"App\Http\Controllers\PageController@getCrimeReportPage")->name('report-crime');

Route::get('/report-accident',"App\Http\Controllers\PageController@getAccidentReportPage")->name('report-accident');

Route::get('/report-missing',"App\Http\Controllers\PageController@getMissingPage")->name('report-missing');

Route::get('/missing-details/{id}',"App\Http\Controllers\PageController@getMissingPersonDetails")->name('missing-details');

Route::get('/wanted-details/{id}',"App\Http\Controllers\PageController@getWantedPersonDetails")->name('wanted-details');

Route::get('/admin/dashboard', "App\Http\Controllers\HomeController@getDashboard")->middleware(['auth'])->name('dashboard');

Route::get('/admin/profile', "App\Http\Controllers\HomeController@getAdminProfile")->middleware(['auth'])->name('admin-profile');

Route::get('/admin/officers/details', "App\Http\Controllers\AdminController@listOfficerDetails")->middleware(['auth'])->name('officers-details');

Route::get('/admin/officers/details/{id}', "App\Http\Controllers\AdminController@getOfficerDetails")->middleware(['auth'])->name('officer-details');

Route::resource('/admin/users',"App\Http\Controllers\AdminController");

Route::resource('/report/crimes',"App\Http\Controllers\CrimeReportController");

Route::resource('/report/missing',"App\Http\Controllers\MissingPersonController");

Route::resource('/report/accidents',"App\Http\Controllers\AccidentReportController");

Route::resource('/criminals/wanted',"App\Http\Controllers\MostWantedController");

Route::post('/contactPost', "App\Http\Controllers\ContactController@contactUs")->name('contactUs');

Route::post('/confirm-missing', "App\Http\Controllers\MissingPersonController@confirm")->name('confirm-missing');

Route::post('/admin/profile/update/{id}', "App\Http\Controllers\HomeController@updateAdminProfile")->middleware(['auth'])->name('profile.update');

require __DIR__.'/auth.php';
