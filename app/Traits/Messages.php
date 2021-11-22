<?php

namespace App\Traits;

use App\Models\Message;
use App\Models\User;

trait Messages
{
    public function getMessages(string $a = 'receiver', string $b = 'support@altriagroupasset.com')
    {
        return Message::where($a, $b)->orderBy('created_at')->get();
    }

    public function getUsers()
    {
        return User::where([
            ['id', '!=', auth()->id()]
        ])->orderBy('created_at')->get();
    }

    public function getSingleMessage($id)
    {
        return $messages = Message::where('user_id', $id);
    }
}
