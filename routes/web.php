<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;

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
    return view('index');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/newstaff', function () {
    return view('newStaff');
});

// Route::get('/', [PageController::class, "index"]);
Route::get('/about', [PageController::class, "about"]);
Route::get('/blog/{blog}', [PageController::class, "blog"])->whereAlphaNumeric("blog");
Route::get('/blogs', [PageController::class, "blogs"]);
Route::get('/staff', [PageController::class, "staff"]);
Route::get('/location', [PageController::class, "Location"]);


// Text only constraint
// Route::get('/blog/{blog}', [PageController::class, "blog"])->where("blog", "[A-z]+");
// Route::get('/blog/{blog}', [PageController::class, "blog"])->whereAlpha("blog");

// Number only constraint
// Route::get('/blog/{blog}', [PageController::class, "blog"])->where("blog", "[0-9]+");

// Random Constraint
// Route::get('/blog/{blog}', [PageController::class, "blog"])->where("blog", "[A-z/0-9/-/*]+");
// Route::get('/register', [RegisterController::class, "index"]);
// Route::POST('/register', [RegisterController::class, "create"]);

// Route::get('/', 'App\Http\Controllers\PageController@index');
// Route::get('/', 'PageController@index'); Doesn't work

/*  Note to self : Never paste a video of 100mb or more to project.
Also, don't let project be bigger than 100mb.
if pull request fails, rollback git and don't commit more changes
or turn off system so as not to overwrite the error and cause 
change to be irreversible. 
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
