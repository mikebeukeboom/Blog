<?php

namespace App;


class Comment extends Model
{
    //Make a relation A Comment belongs to a Post
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
