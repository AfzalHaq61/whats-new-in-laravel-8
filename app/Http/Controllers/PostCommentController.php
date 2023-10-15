<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostCommentController extends Controller
{
    public function postComment(Post $post) {

        request()->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
            'post_id' => $post->id,
            'user_id' => auth()->id(),
            'body' => request('body')

        ]);

        return back();
    }
}
