<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function getReferrals()
    {
        return $this->where('user_id', auth()->id())->get();
    }

    public function deposit()
    {
        return $this->hasMany(Deposit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
