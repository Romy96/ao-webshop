<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index($id) {
        $articles = DB::table('articles')
        	->select('*')
        	->where('category_id', $id)
        	->get();
        return view('article/index',
            [
                'titel' => 'Artikels',
                'articles' => $articles
            ]
        );
    }

    public function view($id){
    	$article_details = Article::getArticle($id);

    	return view('article/view',
    	[
    		'article_details' => $article_details
    	]
    );
    }
}
