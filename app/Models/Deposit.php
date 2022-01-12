<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];


    // UPDATE DEPOSIT

    public function updateDeposit(string $key, string $value, array $fields = [])
    {
        return $this->where($key, $value)->update($fields);
    }

    public function createDeposit(array $fields = [])
    {
        return $this->create($fields);
    }

    public function getAdminUsersDeposit($id)
    {
        $roi = Roi::where('user_id', $id)->sum('amount');
        $processedDeposit = $this->where(['status' => 'processed', 'user_id' => $id])->sum('amount');
        $investments = Investment::where('user_id', $id)->sum('amount');
        $withdrawals = Withdraw::where('user_id', $id)->sum('amount');
        $referralBonus = ReferralBonus::where('user_id', $id)->sum('amount');
        $refund = $this->where(['status' => 'refund', 'user_id' => $id])->sum('amount');
        $transfer = Transfer::where('user_id', $id)->sum('amount');
        $receivedTransfer = Transfer::where([
            ['receiver_username', auth()->user()->username],
            ['status', 'processed']
        ])->sum('amount');

        return $processedDeposit + $roi + $receivedTransfer + $refund + $referralBonus  - $investments - $withdrawals - $transfer;

    }

    public static function getProcessedDeposit()
    {
        $roi = Roi::where('user_id', auth()->id())->sum('amount');
        $processedDeposit = self::where(['status' => 'processed', 'user_id' => auth()->id()])->sum('amount');
        $investments = Investment::getInvestment();
        $withdrawals = Withdraw::getWithdrawals();
        $referralBonus = ReferralBonus::getAmount();
        $refund = self::where(['status' => 'refund', 'user_id' => auth()->id()])->sum('amount');
        $transfer = Transfer::getTransfers();
        $receivedTransfer = Transfer::receivedTransfers();

        return $processedDeposit + $roi + $receivedTransfer + $refund + $referralBonus  - $investments - $withdrawals - $transfer;
    }

    public function getPendingDepositCount()
    {
        return $this->where('status', 'pending')->count();
    }

    public function getTotalDeposit()
    {
        return $this->where('status', 'processed')->sum('amount');
    }

    // eloquent
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function check($amount, $value1): bool
    {
        return $amount <= $value1;
    }

}
