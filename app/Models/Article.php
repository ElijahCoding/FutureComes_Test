<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, Builder};

class Article extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('CommentCount', function (Builder $builder) {
            $builder->withCount('comments');
        });
    }

    public static function getTopFive()
    {
        return static::orderBy('comments_count', 'desc')->get()->take(5);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
