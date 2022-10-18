<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function comments()
    {
        // $data = Comment::where('post_id',$post_id)->orderBy('id','DESC')->get();
        return $this->hasMany(Comment::class, 'post_id');
    }
    
    protected $fillable = [
        'content',
        'user_id',
    ];
}
