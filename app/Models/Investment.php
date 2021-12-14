<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public static function getInvestmentCount()
    {
        return self::where('user_id', auth()->id())->count();
    }

    public static function getAllInvestment()
    {
        return self::sum('amount');
    }

    public function getInvestmentAdminUser($id)
    {
        return $this->where(['user_id' => $id, 'completed' => false])->sum('amount');
    }

    public static function getInvestment()
    {
        return self::where('user_id', auth()->id())->sum('amount');
    }

    public static function check($amount, $value1, $value2): bool
    {
        return $amount < $value1 || $amount > $value2;
    }

    public static function insufficentFund($amount, $value): bool
    {
        return $amount > 0 && $amount <= $value;
    }

    // eloquent
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
