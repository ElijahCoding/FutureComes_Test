<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Comment, Article};

class HomeController extends Controller
{
    public function index()
    {
        $comments = Comment::lastFiveComments();
        $articles = Article::getTopFive();
        $users = User::getTopFive();

        return view('home', compact('comments', 'articles', 'users'));
    }
}
