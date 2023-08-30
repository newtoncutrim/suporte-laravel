<?php

use App\Enums\SupportStatus;
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




Route::get('/supports/{id}/edit', [SupportController::class, 'update'])->name('supports.update_action');

Route::put('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');



Route::delete('/supports/{id}/delete', [SupportController::class, 'destroy'])->name('supports.delete');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

Route::post('/supports/create', [SupportController::class, 'store'])->name('supports.create_action');
Route::get('/contact', [SupportController::class, 'contact'])->name('supports.contact');

Route::fallback(function () {
    return view('welcome');
});

Route::get('/avatars', [SupportController::class, 'getAvatars'])->name('avatars.index');


Route::get('//', function () {
    dd( array_column(SupportStatus::cases(), 'name'));
});
