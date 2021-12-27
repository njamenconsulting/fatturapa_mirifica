<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FatturaController;
use App\Http\Controllers\MailController;

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

Route::get('/', [FatturaController::class, 'index'])->name('fattura-home');
Route::get('fattura/create', [FatturaController::class, 'create'])->name('fattura-create');
Route::get('fattura/edit', [FatturaController::class, 'edit'])->name('fattura-edit');
Route::post('fattura', [FatturaController::class, 'store'])->name('fattura-store');
Route::get('fattura/download/{filename}', [FatturaController::class, 'download']);
Route::get('fattura/mail/{filename}', [MailController::class, 'writeEmail']);
Route::post('fattura/mail', [MailController::class, 'sendEmail'])->name('fattura-sendmail');
