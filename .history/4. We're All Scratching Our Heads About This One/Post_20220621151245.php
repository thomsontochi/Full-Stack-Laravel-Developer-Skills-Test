<?php

// injecting all needed classes and model



class Post extends Model
   {
       public function comments()
       {
           $comment_ids = array_map(function ($comment) { return $comment->id; }, Comment::where("post_id", $this->id)->get()->toArray());
           return array_map(static function ($comment_id) { Comment::find($comment_id); }, $comment_ids);
       }
   }


// solution

class Post extends Model {
    public function comments(){

    }
}