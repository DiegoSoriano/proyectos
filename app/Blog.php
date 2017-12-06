<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'mision', 'vision', 'objetivo', 'integrantes'];
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $user_id= auth()->id();
        $this->comments()->create(compact(['user_id', 'body']));

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
