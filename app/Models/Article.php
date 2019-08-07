<?php

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
}
