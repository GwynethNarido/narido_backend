<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
    $posts = \App\Models\Post::all();
    return view('posts.index', compact('posts'));
}
}
