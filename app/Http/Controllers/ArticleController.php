<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	#metodo get
    public function index()
    {
    	return $articles = Article::all();
    }

    #metodo get
    public function show(Article $article)
    {
    	return $article;
    }

    #metodo get
    public function edit(Article $article)
    {
    	return $article;
    }

    #metodo post
    public function store(Request $request)
    {
    	$article = Article::create($request->all());

    	return response()->json($article, 201);
    }

    #metodo put
    public function update(Request $request, Article $article)
    {
    	$article->update($request->all());

    	return response()->json($article, 200);
    }

    #metodo delete
    public function delete(Article $article)
    {
    	$article->delete();

    	return response()->json(null, 204);
    }
}
