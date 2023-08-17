<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SupportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.store');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update_action');
Route::get('/supports/{id}/update', [SupportController::class, 'update_action'])->name('supports.update');
Route::delete('/supports/{id}/delete', [SupportController::class, 'delete'])->name('supports.delete');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

Route::post('/supports/create', [SupportController::class, 'create_action'])->name('supports.create_action');
Route::get('/contact', [SupportController::class, 'contact'])->name('supports.contact');
Route::get('/', function () {
    return view('welcome');
});
