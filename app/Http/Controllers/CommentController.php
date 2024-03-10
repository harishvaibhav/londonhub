<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    // used to list all the comments in this web application
    public function index()
    {
        $comments = Comment::all();
        return view('comment.index', [
            'comments' => $comments,
        ]);
    }


    // used to create a new comment for a post
    public function store(Request $request)
    {
        // extra validation for the comment body just to avoid redundant data in the database
        $request->validate([
            'body' => 'required',
        ]);
        $input = $request->all();
        // logged in user can be accessed via auth()->user() method
        // This method is provided by defauly by laravel authentication
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        return back();
    }
}
