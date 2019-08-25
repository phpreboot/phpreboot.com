<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * An article must have an author
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * One article may have multiple comments
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'author_id');
    }
}
