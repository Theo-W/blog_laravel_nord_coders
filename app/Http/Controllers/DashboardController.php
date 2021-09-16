<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = \Auth::user()->posts;

        return view('dashboard', compact('posts'));
    }
}
