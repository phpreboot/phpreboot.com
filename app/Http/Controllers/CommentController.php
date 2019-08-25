<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Article;
use App\Services\CommentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    private $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function new(Article $article, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required|max:1000|min:5',
        ]);

        if ($validator->fails()) {
            return redirect(route('article-show', $article->id) . "#comment-section")
                ->withErrors($validator)
                ->withInput();
        }
        $user = Auth::user();
        $comment = $request->input('comment');

        $result = $this->commentService->store($article, $user, $comment);

        return redirect(route('article-show', $article->id));
    }
}
