<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Article;
use App\Repositories\CommentRepository;
use App\User;

class CommentService
{
    private $repository;

    public function __construct(CommentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(Article $article, User $user, string $comment): bool
    {
        // TODO: Check if user may comment

        return $this->repository->store($article, $user, $comment);
    }

    public function getComments(int $articleId, int $offset=0)
    {
        return $this->repository->getComments($articleId, $offset);
    }

    public function replyCount(int $articleId)
    {
        return $this->repository->replyCount($articleId);
    }
}
