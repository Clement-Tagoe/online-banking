<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Redirect::to('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/transfer', function () {
    return view('transfer');
})->middleware('auth')->name('transfer');

Route::put('/account-details/{account}', [AccountController::class, 'update'])->middleware('auth')->name('account.update');

Route::get('/transaction-details/{transaction}/edit', [TransactionController::class, 'edit'])->middleware('auth')->name('transaction.edit');
Route::put('/transaction-details/{transaction}', [TransactionController::class, 'update'])->middleware('auth')->name('transaction.update');
Route::put('/transfer', [TransactionController::class, 'updateTransfer'])->middleware('auth')->name('transfer.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile/lastkin909', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
