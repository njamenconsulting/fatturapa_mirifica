<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceFileController;
use App\Http\Controllers\InvoiceMailController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/help', [WelcomeController::class, 'help'])->name('help');
//
Route::get('invoice/create', [InvoiceController::class, 'create'])->name('invoiceCreate');
Route::get('invoice/edit', [InvoiceController::class, 'edit'])->name('invoiceEdit');
Route::post('invoice/store', [InvoiceController::class, 'store'])->name('invoiceStore');
Route::post('invoice/check', [InvoiceController::class, 'check'])->name('invoiceCheck');
Route::get('invoice/download/{id}', [InvoiceController::class, 'download'])->name('invoiceDownload');
Route::get('invoice/send/{id}', [InvoiceController::class, 'send'])->name('invoiceSend');


//
Route::get('invoice/file/list', [InvoiceFileController::class, 'index'])->name('fileList');
Route::get('invoice/file/delete/{id}', [InvoiceFileController::class, 'delete'])->name('fileDelete');
Route::get('invoice/file/download/{id}', [InvoiceFileController::class, 'download'])->name('fileDownload');
Route::get('invoice/file/show/{id}', [InvoiceFileController::class, 'show'])->name('fileShow');
//

Route::get('invoice/mail/create/{id}', [InvoiceMailController::class, 'writing'])->name('mailCreate');
Route::post('invoice/mail/send', [InvoiceMailController::class, 'sending'])->name('mailSend');
