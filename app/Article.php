<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
	public static function getArticle($id){
		return DB::table('articles')
			->select('*')
			->where('id', $id)
			->get();
	}
    //protected $table = 'articles';
}
