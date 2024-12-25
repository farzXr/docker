<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Catigory;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $catigories = Catigory::all();
        $tags = Tag::all();
        return view('post.create', compact('catigories', 'tags'));
    }
}
