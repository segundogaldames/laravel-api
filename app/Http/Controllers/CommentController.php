<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
	#metodo get
	public function edit(Comment $comment){
		return $comment;
	}

	#metodo put
	public function update(Request $request, Comment $comment){
		$comment->update($request->all());# update comments set comment = ?, article_id = ? where id = ?

    	return response()->json($comment, 200);
	}

	#metodo post
    public function setComment(Request $request, Article $article){
    	#$comment = Article::create($request->all(), $article->id);#insert into comments (comment,article_id) values(?,?)

    	$comment = new Comment;
    	$comment->comment = $request->comment;
    	$comment->article_id = $article->id;
    	$comment->save();

    	return response()->json($comment, 201);
    }

    public function delete(Comment $comment){
    	$comment->delete();

    	return response()->json(null, 204);
    }
}
