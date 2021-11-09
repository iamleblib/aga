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

    public static function getWithdrawals()
    {
        return self::sum('amount');
    }

    public function getCount()
    {
        return $this->sum('amount');
    }

    // eloquent
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
