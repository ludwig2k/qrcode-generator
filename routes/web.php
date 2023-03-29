<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;
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

Route::get('/', [QRCodeController::class, 'index'])->name('index');

Route::get('/generate', [QRCodeController::class, 'generate'])->name('generate');



Route::get('/qr-code-data/{data}', [QRCodeController::class, 'showData'])->name('qr_code_data');
