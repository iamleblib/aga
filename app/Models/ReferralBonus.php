<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralBonus extends Model
{
    use HasFactory;

    public static function getAmount()
    {
        return self::sum('amount');
    }

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    // eloquent
    public static function getReferralBonus()
    {
        return self::sum('amount');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
