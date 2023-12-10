<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarAnime;
use App\Models\User;
use App\Models\Category;

class DaftarAnimeController extends Controller
{
    public function index() {
        
        $title = '';
        $tags = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' In Category ' . $category->name;
            $tags = ' CATEGORY &raquo; <b>' . $category->name . '</b>';
        }
    
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
            $tags = ' AUTHOR &raquo; <b>' . $author->name . '</b>';
        }

        return view('daftar-anime', [
            'title' => "Daftar Anime" . $title,
            'tags' => "Posts &raquo; <b>Daftar Anime</b>" . $tags,
            'posts' => DaftarAnime::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(DaftarAnime $post) {
        return view('anime', [
            'title' => "Deskripsi Anime " . $post->title,
            'post' => $post
        ]);
    }
}
