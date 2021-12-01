<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function transferFund($fields)
    {
        return $this->create($fields);
    }

    public static function getTransfers()
    {
        return auth()->user()->transfer()->sum('amount');
    }

    public static function receivedTransfers()
    {
        return self::where([
            ['receiver_username', auth()->user()->username],
            ['status', 'processed']
        ])->sum('amount');
    }

    public function updateTransfer(string $key, string $value, array $fields = [])
    {
        return $this->where($key, $value)->update($fields);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
