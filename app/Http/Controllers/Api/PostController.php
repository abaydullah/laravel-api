<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::all());
    }
    public function store(Request $request)
    {
        $request->validate(['title' => 'required','content' => 'required']);

        $post = Post::create($request->only(['title','content']));

        return response()->json(new PostResource($post));
    }
}
