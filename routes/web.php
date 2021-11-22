<?php
use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Guest\DashboardController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\SendMessages;
use App\Http\Controllers\Guest\TransferController;
use App\Http\Controllers\Guest\TwoFAController;
use App\Http\Controllers\Guest\Wallet\WalletController;
use App\Http\Controllers\Transaction\DepositsController;
use App\Http\Controllers\Transaction\InvestmentsController;
use App\Http\Controllers\Transaction\RealEstatesController;
use App\Http\Controllers\Transaction\ReferralController;
use App\Http\Controllers\Transaction\RoisController;
use App\Http\Controllers\Transaction\WithdrawsController;
use App\Http\Controllers\HomeController;
use App\Models\Referral;
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

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [PagesController::class, 'index'])->name('front.index');
Route::get('noaccess', function () {
    return view('errors.noaccess');
})->name('no.access');

Route::get('blocked', function () {
    return view('errors.blocked');
})->name('errors.block');


Route::group(['prefix' => 'secure'], function () {
    Auth::routes(['verify' => true]);
    Route::group(['middleware' => ['auth', 'user', 'verified']], function () {

        Route::get('/', [DashboardController::class, 'index'])->name('home');
//
//        Users Profile
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [GuestController::class, 'index'])->name('profile.index');
            Route::post('/update', [GuestController::class, 'update'])->name('profile.update');
            Route::post('/updatePassword', [GuestController::class, 'updatePassword'])->name('guest.profile.update');
            Route::post('/referral-withdraw', [ReferralController::class, 'withdraw'])->name('referral.withdraw');
            Route::post('/delete-user', [GuestController::class, 'destroy'])->name('user.delete');

//            Create Wallet address
            Route::post('/wallet', [WalletController::class, 'store'])->name('wallet.store');

        });

        Route::group(['prefix' => 'deposit'], function () {
            Route::get('/preview', [DashboardController::class, 'index']);
            Route::post('/preview', [DepositsController ::class, 'preview'])->name('deposit.preview');
            Route::post('/process', [DepositsController::class, 'process'])->name('deposit.process');
            Route::get('/logs', [DepositsController::class, 'logs'])->name('deposit.logs');
        });

        Route::group(['prefix' => 'investment'], function () {
            Route::get('/', [InvestmentsController::class, 'index'])->name('investment.guest.index');
            Route::get('/preview', [InvestmentsController::class, 'index'])->name('investment.preview');
            Route::post('/preview', [InvestmentsController::class, 'preview'])->name('investment.preview');
            Route::post('/process', [InvestmentsController::class, 'process'])->name('investment.process');
            Route::get('/logs', [InvestmentsController::class, 'logs'])->name('investment.logs');
            Route::get('/roi-log', [RoisController::class, 'logs'])->name('roi.log');

        });

        Route::group(['prefix' => 'transfer'], function () {

            // Transfer
            Route::resource('transfer', TransferController::class);
        });

            Route::group(['prefix' => 'withdraw'], function () {
            Route::get('/', [WithdrawsController::class, 'index'])->name('withdraw.index');
            Route::post('/process', [WithdrawsController::class, 'process'])->name('withdraw.process');
            Route::get('/logs', [WithdrawsController::class, 'logs'])->name('withdraw.logs');
        });

        Route::group(['prefix' => 'realestate'], function () {
            Route::get('/', [RealEstatesController::class, 'index'])->name('realestate.index');
            Route::get('/preview/{id}', [RealEstatesController::class, 'show'])->name('realestate.preview');
        });

        Route::post('guests/mail', [SendMessages::class, 'store'])->name('guests.send.message');

        Route::post('/guest-wallet-update/{id}', [WalletController::class, 'updateGuestWallet'])->name('guest.wallet.update');
        Route::post('/guest-wallet-delete/{id}', [WalletController::class, 'deleteGuestWallet'])->name('guest.delete.wallet');

    });
});




//Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/update', [AdminController::class, 'profileUpdate'])->name('admin.profile.update');

    Route::group(['prefix' => 'user'], function () {
        Route::get('/add', [UsersController::class, 'add'])->name('users.add');
        Route::get('/manage', [UsersController::class, 'manage'])->name('users.index');
        Route::get('/view/{id}', [UsersController::class, 'show'])->name('users.show');
        Route::post('/add', [UsersController::class, 'addProcess'])->name('users.add.process');
        Route::post('/update/{id}', [UsersController::class, 'update'])->name('user.update');
        Route::post('/update/email/{id}', [UsersController::class, 'updateEmail'])->name('user.email.update');
        Route::post('/update/role/{id}', [UsersController::class, 'updateRole'])->name('user.role.update');
        Route::post('/update/ref/{id}', [DashboardController::class, 'updateRef'])->name('user.ref.update');
        Route::post('/alter/{id}', [UsersController::class, 'alter'])->name('user.alter');
    });


    Route::resource('messages', MessagesController::class);

    Route::group(['prefix' => 'transaction'], function () {
        Route::get('/deposits', [TransactionController::class, 'deposit'])->name('deposit.index');
        Route::get('/withdrawals', [TransactionController::class, 'withdrawal'])->name('withdrawal.index');
        Route::get('/investments/all', [TransactionController::class, 'investment'])->name('investment.index');


        // alter deposit
        Route::post('/deposit/approve/{id}', [TransactionController::class, 'approveDeposit'])->name('admin.deposit.approve');
        Route::post('/deposit/decline/{id}', [TransactionController::class, 'declineDeposit'])->name('admin.deposit.decline');

        // alter withdrawal
        Route::post('/withdraw/approve/{id}', [TransactionController::class, 'approveWithdrawal'])->name('admin.withdraw.approve');
        Route::post('/withdraw/decline/{id}', [TransactionController::class, 'declineWithdrawal'])->name('admin.withdraw.decline');
    });

        Route::post('/admin-wallet-store', [WalletController::class, 'storeAdminWallet'])->name('admin.wallet.store');
        Route::post('/admin-wallet-update/{id}', [WalletController::class, 'updateAdminWallet'])->name('admin.wallet.update');
        Route::post('/admin-wallet-delete/{id}', [WalletController::class, 'deleteAdminWallet'])->name('admin.delete.wallet');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
