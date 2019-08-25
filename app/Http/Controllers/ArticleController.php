<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\ArticleService;
use App\Services\CommentService;
use Auth;
use HTMLPurifier;
use Illuminate\Http\Request;
use Parsedown;

class ArticleController extends Controller
{
    private $articleService;
    private $commentService;

    public function __construct(ArticleService $articleService, CommentService $commentService)
    {
        $this->articleService = $articleService;
        $this->commentService = $commentService;
    }

    public function new()
    {
        return view('article/new');
    }

    public function store(Request $request)
    {
        // Cancel
        if ($request->input('cancel')) {
            return redirect()->route('article-new');
        }

        $input = $request->validate([
            'title' => 'required|max:255|min:5',
            'article' => 'required',
        ]);

        $input['userId'] = Auth::id();
        $publish = $request->input('save');
        $input['publish'] = $publish == "Publish";

        $result = $this->articleService->saveArticle($input);

        // TODO: Based on result, we need to set success message.

        return redirect()->route('article-new');
    }

    public function show(Article $article, Parsedown $parsedown, HTMLPurifier $purifier)
    {
        $comments = $this->commentService->getComments($article->id);

        $replyCountCollection = $this->commentService->replyCount($article->id);
        $replyCount = [];
        foreach ($replyCountCollection as $reply) {
            $replyCount[$reply->parent_id] = $reply->count;
        }

        return view('article/show', [
            'article' => $article,
            'markdown' => $purifier->purify($parsedown->text($article->markdown)),
            'comments' => $comments,
            'replyCount' => $replyCount,
        ]);
    }
}
