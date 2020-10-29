<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	#metodo get
    public function index()
    {
        #eloquent
    	return $articles = Article::all(); #select * from articles
    }

    #metodo get
    public function show(Article $article)
    {
        # select * from articles join comments on article.id = comments.article_id where articles.id = ?
    	return $article = Article::with('comments')->find($article);
    }

    #metodo get
    public function edit(Article $article)
    {
    	return $article;
    }

    #metodo get: listar los articulos con sus comentarios
    public function articleComments()
    {
        return $articles = Article::with('comments')->get();
    }

    #metodo post
    public function store(Request $request)
    {
    	$article = Article::create($request->all());#insert into articles (title,body) values(?,?)

    	return response()->json($article, 201);
    }

    #metodo put
    public function update(Request $request, Article $article)
    {
    	$article->update($request->all());# update articles set title = ?, body = ? where id = ?

    	return response()->json($article, 200);
    }

    #metodo delete
    public function delete(Article $article)
    {
    	$article->delete();#delete from articles where id = ?

    	return response()->json(null, 204);
    }
}
