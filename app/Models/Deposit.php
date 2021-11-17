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


    public static function getProcessedDeposit()
    {
        $processedDeposit = self::where('status', 'processed')->sum('amount');
        $investments = Investment::getInvestment();
        $withdrawals = Withdraw::getWithdrawals();
        $referralBonus = ReferralBonus::getAmount();
        $refund = self::where('status', 'refund')->sum('amount');

        return $processedDeposit + $refund + $referralBonus - $investments - $withdrawals;
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
