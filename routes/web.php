<?php

use App\Http\Controllers\FileUpload;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\GithubController;
use App\Http\Controllers\GoogleController as ControllersGoogleController;
use App\Http\Controllers\PCAPController;
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


Route::prefix('pcap')->group(function () {
    Route::get('/list', [PCAPController::class, 'list'])->name('pcap.list');
    Route::get('/overview', [PCAPController::class, 'overview'])->name('pcap.overview');
    Route::get('/credentials', [PCAPController::class, 'credentials'])->name('pcap.credentials');
    Route::get('/connections', [PCAPController::class, 'connections'])->name('pcap.connections');
    Route::get('/network', [PCAPController::class, 'network'])->name('pcap.network');
    Route::get('/dns', [PCAPController::class, 'dns'])->name('pcap.dns');
    Route::get('/http-headers', [PCAPController::class, 'http_headers'])->name('pcap.http-headers');
    Route::get('/open-ports', [PCAPController::class, 'open_ports'])->name('pcap.open-ports');
    Route::get('/pictures', [PCAPController::class, 'pictures'])->name('pcap.pictures');
    Route::get('/http', [PCAPController::class, 'http'])->name('pcap.http');
    Route::get('/smb', [PCAPController::class, 'smb'])->name('pcap.smb');
    Route::get('/servers', [PCAPController::class, 'servers'])->name('pcap.servers');
    Route::get('/documents', [PCAPController::class, 'documents'])->name('pcap.documents');
    Route::get('/networks', [PCAPController::class, 'networks'])->name('pcap.networks');
    Route::get('/ftp', [PCAPController::class, 'ftp'])->name('pcap.ftp');
    Route::get('/telnet', [PCAPController::class, 'telnet'])->name('pcap.telnet');
    Route::get('/ssdp', [PCAPController::class, 'ssdp'])->name('pcap.ssdp');
    Route::get('/sip', [PCAPController::class, 'sip'])->name('pcap.sip');
    Route::get('/arp', [PCAPController::class, 'arp'])->name('pcap.arp');
    Route::get('/ethernet', [PCAPController::class, 'ethernet'])->name('pcap.ethernet');
    Route::get('/wifi', [PCAPController::class, 'wifi'])->name('pcap.wifi');
    Route::get('/host', [PCAPController::class, 'host'])->name('pcap.host');

});
