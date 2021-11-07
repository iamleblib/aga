<?php

namespace App\Traits;

use App\Models\Message;

trait Messages
{
    public function getMessages(string $a = 'receiver', string $b = 'support@coinbaseassets.com')
    {
        return $messages = Message::where($a, $b)->get();
    }

    public function getSingleMessage($id)
    {
        return $messages = Message::where('user_id', $id);
    }
}
