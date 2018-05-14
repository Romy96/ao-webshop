<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::find('category_id');
        return view('article/index',
            [
                'titel' => 'artikels',
                'articles' => $articles
            ]
        );
    }
}
