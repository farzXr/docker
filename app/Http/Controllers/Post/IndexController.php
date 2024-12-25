<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $query = Post::query();

        if(isset($data['catigory_id'])){
            $query->where('catigory_id', $data['catigory_id']);
        }

        if(isset($data['title'])){
            $query->where('title', 'like',  "%{$data['title']}%");
        }
        $posts = $query->paginate(5);

        return view('post.index', compact('posts'));
    }
}
