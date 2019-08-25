<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * A comment must have an author
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * A comment belongs to an article
     */
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
