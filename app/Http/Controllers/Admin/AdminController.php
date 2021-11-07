<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Traits\Messages;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use Messages;
    public function index()
    {
        $users = User::all();
        return view('admin.index')->with([
            'users' => $users,
            'messages' => $this->getMessages()
        ]);
    }
}
