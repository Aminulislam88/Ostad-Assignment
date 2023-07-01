<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // ...

    public static function getSoftDeletedPosts()
    {
        return self::withTrashed()->get();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
$softDeletedPosts = Post::getSoftDeletedPosts();

foreach ($softDeletedPosts as $post) {
    // Access soft deleted post details
    echo "Post ID: " . $post->id . "<br>";
    echo "Post Title: " . $post->title . "<br>";
    // ...
}
