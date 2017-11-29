<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    //Make relation -> A post has Many comments.
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
        $this->comments()->create(['body' => $body]);
    }

}
