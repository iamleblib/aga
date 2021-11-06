<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Guest\DashboardController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\Wallet\WalletController;
use App\Http\Controllers\Transaction\DepositController;
use App\Http\Controllers\Transaction\InvestmentController;
use App\Http\Controllers\Transaction\WithdrawController;
use App\Http\Controllers\Transaction\RealEstateController;
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

Route::get('/', [PagesController::class, 'index'])->name('front.index');
Route::get('noaccess', function () {
    return view('errors.noaccess');
})->name('no.access');


Route::group(['prefix' => 'secure'], function () {
    Auth::routes();

    Route::group(['middleware' => ['auth', 'user']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
//
//        Users Profile
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [GuestController::class, 'index'])->name('profile.index');
            Route::post('/update', [GuestController::class, 'update'])->name('profile.update');

//            Create Wallet address
            Route::post('/wallet', [WalletController::class, 'store'])->name('wallet.store');

        });

        Route::group(['prefix' => 'deposit'], function () {
            Route::get('/preview', [DashboardController::class, 'index']);
            Route::post('/preview', [DepositController::class, 'preview'])->name('deposit.preview');
            Route::post('/process', [DepositController::class, 'process'])->name('deposit.process');
            Route::get('/logs', [DepositController::class, 'logs'])->name('deposit.logs');

        });

        Route::group(['prefix' => 'investment'], function () {
            Route::get('/', [InvestmentController::class, 'index'])->name('investment.index');
            Route::post('/preview', [InvestmentController::class, 'preview'])->name('investment.preview');
            Route::post('/process', [InvestmentController::class, 'process'])->name('investment.process');
            Route::get('/logs', [InvestmentController::class, 'logs'])->name('investment.logs');
        });

        Route::group(['prefix' => 'withdraw'], function () {
            Route::get('/', [WithdrawController::class, 'index'])->name('withdraw.index');
            Route::post('/process', [WithdrawController::class, 'process'])->name('withdraw.process');
            Route::get('/logs', [WithdrawController::class, 'logs'])->name('withdraw.logs');
        });

        Route::group(['prefix' => 'realestate'], function () {
            Route::get('/', [RealEstateController::class, 'index'])->name('realestate.index');
        });

    });
});




//Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/add-users', [UsersController::class, 'add'])->name('users.add');
});
