<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminWallet extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function exist($key, $value):bool
    {
        return $this->where($key, $value)->count();
    }

    // eloquent
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
