<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
	#metodo post
    public function setComment(Request $request, Article $article){
    	#$comment = Article::create($request->all(), $article->id);#insert into comments (comment,article_id) values(?,?)

    	$comment = new Comment;
    	$comment->comment = $request->comment;
    	$comment->article_id = $article->id;
    	$comment->save();

    	return response()->json($comment, 201);
    }
}
