<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Article;
use Carbon\Carbon;

class ArticleRepository
{
    public function store(int $authorId, string $title, string $article, bool $publish = false): bool
    {
        $articleModal = new Article();
        $articleModal->author_id = $authorId;
        $articleModal->title = $title;
        $articleModal->markdown = $article;

        if ($publish) {
            $articleModal->published_at = Carbon::now()->format('Y-m-d H:i:s');
        }

        return $articleModal->save();
    }
}
