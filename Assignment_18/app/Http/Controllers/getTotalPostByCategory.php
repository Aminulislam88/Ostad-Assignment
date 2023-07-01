<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getTotalPostByCategory extends Controller
{
    public static function getTotalPostsByCategory($categoryId)
    {
        $totalPosts = DB::table('posts')
            ->where('category_id', $categoryId)
            ->count();

        return $totalPosts;
    }
}
