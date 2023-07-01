<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    function postTable(){
        $posts = DB::table('posts')
        ->select('posts.*', 'categories.name as category_name')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->get();

        foreach ($posts as $post) {
    // Access post details
        echo "Post ID: " . $post->id . "<br>";
        echo "Post Title: " . $post->title . "<br>";
    // Access associated category details
        echo "Category Name: " . $post->category_name . "<br>";
        echo "<br>";
        }
    }
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}
