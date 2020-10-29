<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['comment','article_id'];

	public function article(){
		return $this->belongsTo(Article::class);
	}
}
# select * from comments join articles on comments.article_id = articles.id