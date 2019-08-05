<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::whereId($id)->first();
        $articles = $user->articles()->paginate(5);

        return view('users.show', compact('user', 'articles'));
    }
}
