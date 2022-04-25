<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public static function getRoi()
    {
        return self::where('user_id', auth()->id())->get();
    }

    public function getAll()
    {
        return $this->all();
    }

    public function roi()
    {

    }
}
