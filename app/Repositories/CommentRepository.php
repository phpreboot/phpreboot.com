<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Article;
use App\Models\Comment;
use App\User;

class CommentRepository
{
    public function store(Article $article, User $user, string $comment): bool
    {
        $commentModel = new Comment();
        $commentModel->article_id = $article->id;
        $commentModel->author_id = $user->id;
        $commentModel->comment = $comment;

        return $commentModel->save();
    }

    public function getComments(int $articleId, int $offset=0)
    {
        $comments = Comment::where('article_id', $articleId)
            ->whereNull('parent_id')
            ->offset($offset)
            ->limit(10)
            ->get();

        return $comments;
    }

    public function replyCount(int $articleId)
    {
        return Comment::where('article_id', $articleId)
            ->selectRaw("parent_id, count(parent_id) as count")
            ->whereNotNull('parent_id')
            ->groupBy('parent_id')
            ->get();
    }
}
