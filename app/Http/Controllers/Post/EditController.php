<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Catigory;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $catigories = Catigory::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'catigories', 'tags'));
    }
}
