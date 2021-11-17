<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];


    public function check($amount, $value1): bool
    {
        return $amount <= $value1;
    }

    // UPDATE WITHDRAWALS

    public function updateWithdrawal(string $key, string $value, array $fields = [])
    {
        return $this->where($key, $value)->update($fields);
    }

    public static function getWithdrawals()
    {
        return self::sum('amount');
    }

    public function getCount()
    {
        return $this->sum('amount');
    }

    public function pendingWithdrawals()
    {
        return $this->where('status', 'pending');
    }

    // eloquent
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
