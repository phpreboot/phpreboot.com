<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function saveArticle(array $article): bool
    {
        return $this->repository->store(
            $article['userId'],
            $article['title'],
            $article['article'],
            $article['publish']
        );
    }
}
