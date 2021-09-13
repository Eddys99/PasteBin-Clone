<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller {
    function show() {
        $data = Posts::all();
        return view('userPosts',['posts' => $data]);
    }

    function showById($id) {
        $data = Posts::find($id);
        return view('openPost',['posts' => $data]);
    }
}
