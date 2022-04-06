<?php
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\GithubController;
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


Route::get('/', function () {
    return view('frontend.index');
});
// Route::get('/file',[frontController::class, 'createFile']);
// Route::post('/file',[frontController::class, 'fileUpload'])->name('fileUpload');
Route::get('/Fileview', [FileUpload::class, 'Fileview']);

// Route::get('/file', [FileUpload::class, 'createForm']);
Route::post('/file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

// Route::get('/statistics', [FileUpload::class, 'statistics']);
Route::get('/statistics/{u_id}', [FileUpload::class, 'statistics']);

Route::get('/a',[FileUpload::class, 'anomaly']);
Route::get('signature',[FileUpload::class, 'signature']);
Route::view('test','test');

//route for sign in
Route::get('/login', [FileUpload::class, 'login']);


// route
Route:: get('/ftp',function()
{
    return view ('ftp');
});



Route:: get('/dashboard',function()
{
    return view ('dashboard');
});



// route for dns
Route:: get('/dns',function()
{
    return view ('frontend.dns');
});

Route::get('/frontend/dns', [FileUpload::class, 'dns']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Google login
Route::get('/auth/google/redirect', [GoogleController::class, 'handleGoogleRedirect'])->name('login.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);



// github login
Route::get('/auth/github/redirect', [GithubController::class, 'handleGithubRedirect'])->name('login.github');
Route::get('/auth/github/callback', [GithubController::class, 'handleGithubCallback']);


// facebook login
Route::get('/auth/facebook/redirect', [authcontroller::class, 'facebookredirect'])->name('login.facebook');
Route::get('/auth/facebook/callback', [authcontroller::class, 'facebookcallback']);