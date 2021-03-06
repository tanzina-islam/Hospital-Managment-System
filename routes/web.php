<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DoctorsController;
//use App\Http\Controllers\MainController;


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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('auths','App\Http\Controllers\PatientsController');

Route::resource('dcts','App\Http\Controllers\DoctorsController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Route::get('/main', 'MainController@index');
Route::post('/','App\Http\Controllers\MainController@checklogin');
Route::get('/','App\Http\Controllers\MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');

Route::get('/','App\Http\Controllers\PatientsController@index');
Route::resource('auths', PatientsController::class);

Route::get('/','App\Http\Controllers\DoctorsController@index');
Route::resource('dcts', DoctorsController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
