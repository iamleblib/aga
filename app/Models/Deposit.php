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

    public function getProcessedDeposit()
    {
        $processedDeposit = self::where('status', 'processed')->sum('amount');
        $investments = Investment::getInvestment();
        $withdrawals = Withdraw::getWithdrawals();

        return $processedDeposit - $investments - $withdrawals;
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

}
