<?php

use App\Http\Controllers\FileUpload;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\GithubController;
use App\Http\Controllers\GoogleController as ControllersGoogleController;
use App\Http\Controllers\SocialController;
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


Route::get('/', [SocialController::class, 'index'])->name('index');
// Route::get('/file',[frontController::class, 'createFile']);
// Route::post('/file',[frontController::class, 'fileUpload'])->name('fileUpload');
Route::get('/Fileview', [FileUpload::class, 'Fileview']);

// Route::get('/file', [FileUpload::class, 'createForm']);
Route::post('/file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
Route::get('/Logout', [SocialController::class, 'Logout'])->name('Logout');



// Route::get('/statistics', [FileUpload::class, 'statistics']);
Route::get('/statistics/{u_id}', [FileUpload::class, 'statistics']);

Route::get('/a', [FileUpload::class, 'anomaly']);
Route::get('signature', [FileUpload::class, 'signature']);
Route::view('test', 'test');

//route for sign in
Route::get('/login', [SocialController::class, 'login'])->name('login');


// route
Route::get('/ftp', function () {
    return view('ftp');
});



Route::get('/dashboard', function () {
    return view('dashboard');
});



// route for dns
Route::get('/dns', function () {
    return view('frontend.dns');
});

Route::get('/frontend/dns', [FileUpload::class, 'dns']);

Route::get('auth/social', [SocialController::class, 'show'])->name('social.login');
Route::get('oauth/{google}', [SocialController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('/auth/{google}/callback/', [SocialController::class, 'handleProviderCallback'])->name('social.callback');

// github login
Route::get('/auth/github/redirect', [GithubController::class, 'handleGithubRedirect'])->name('login.github');
Route::get('/auth/github/callback', [GithubController::class, 'handleGithubCallback']);


// facebook login
Route::get('/auth/facebook/redirect', [authcontroller::class, 'facebookredirect'])->name('login.facebook');
Route::get('/auth/facebook/callback', [authcontroller::class, 'facebookcallback']);
