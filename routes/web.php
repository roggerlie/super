<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PernyataanController;
use App\Http\Controllers\WebhookController;

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

Route::get('/', [PernyataanController::class, 'index']);
Route::post('pernyataan', [PernyataanController::class, 'simpan'])->name('pernyataan.simpan');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Route::get('test/{nis}', [PernyataanController::class, 'test']);

Route::get('tagihan', [WebhookController::class, 'tagihan']);

Route::get('info', function () {
    return phpinfo();
});
