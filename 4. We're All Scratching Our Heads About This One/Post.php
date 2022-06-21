<?php

// here is where we inject all needed classes and models



class Post extends Model
{
    public function comments()
    {
        $comment_ids = array_map(function ($comment) {
            return $comment->id;
        }, Comment::where("post_id", $this->id)->get()->toArray());
        return array_map(static function ($comment_id) {
            Comment::find($comment_id);
        }, $comment_ids);
    }
}


// solution

// i believe the syntax for the above was wrong and bellow is the intended way to fetch the comment id in a laravel controller

class Post extends Model
{
    public function comments()
    {
        $comment_ids = Comment::where("post_id", $this->id)->pluck($comment_id)->toArray();
    }
}
