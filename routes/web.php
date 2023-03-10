<?php

use App\Http\Controllers\QrCodeController;
use http\Client\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
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

Route::get('/email-verified', function () {
    return view('welcome');
})->name('home');

Route::get('/qrcode', [QrCodeController::class, 'index']);
