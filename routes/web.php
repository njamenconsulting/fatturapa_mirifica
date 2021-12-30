<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\InvoiceFileController;
use App\Http\Controllers\InvoiceGeneratorController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('fattura-home');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/help', [WelcomeController::class, 'help'])->name('help');
//
Route::get('invoice/file/list', [InvoiceFileController::class, 'index'])->name('file-list');
Route::get('invoice/file/delete/{filename}', [InvoiceFileController::class, 'delete'])->name('file-delete');
Route::get('invoice/file/download/{filename}', [InvoiceFileController::class, 'download'])->name('file-download');
Route::get('invoice/file/show/{filename}', [InvoiceFileController::class, 'show'])->name('file-show');
//
Route::get('invoice/generator/create', [InvoiceGeneratorController::class, 'create'])->name('invoice-create');
Route::get('invoice/generator/edit', [InvoiceGeneratorController::class, 'edit'])->name('invoice-edit');
Route::post('invoice/generator/check', [InvoiceGeneratorController::class, 'check'])->name('invoice-check');
Route::post('invoice/generator/store', [InvoiceGeneratorController::class, 'store'])->name('invoice-store');
Route::get('invoice/generator/download/{filename}', [InvoiceGeneratorController::class, 'download'])->name('invoice-download');

Route::get('invoice/mail/writing/{filename}', [InvoiceMailController::class, 'writing'])->name('writing-mail');
Route::post('invoice/mail/sending', [InvoiceMailController::class, 'sending'])->name('sending-mail');