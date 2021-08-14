<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->bookmarkingPosts;

        return view('bookmarks.index', ['posts' => $posts]);
    }

    public function add(Post $post)
    {
        Auth::user()->bookmarkingPosts()->attach($post->id);
    
        return redirect()->back();
    }    
}
