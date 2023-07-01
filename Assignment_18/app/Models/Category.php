<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public $timestamps = true;
    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public static function find($int)
    {
    }

    public static function create(array $array)
    {
    }

    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}
        $category = Category::create([
             'name' => 'Example Category',
            ]);
        $category = Category::find(1);
        $latestPost = $category->latestPost;

        if ($latestPost) {
            echo   $latestPost->title . "<br>";
            echo  $latestPost->content . "<br>";

            } else {
            echo "No posts found for this category.";
}


