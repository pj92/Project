<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body) {


        $this->comments()->Create(compact('body'));

    }
}
