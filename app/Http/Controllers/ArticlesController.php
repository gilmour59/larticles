<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\Article as ArticleResource;
use App\Http\Resources\ArticleCollection;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Articles
        //$articles = Article::paginate(15);
        $articles = Article::all();

        //Return Collection of Articles as a Resource

        //return ArticleResource::collection($articles);
        return new ArticleCollection($articles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $article = $request->isMethod('put') ? Article::findOrFail($request->article_id) : new Article;

        $article->id = $request->input('article_id');
        $article->name = $request->input('name');
        $article->body = $request->input('body');
        */
        if($request->isMethod('put')){
            $article = Article::findOrFail($request->article_id);
            $article->name = $request->input('name');
            $article->body = $request->input('body');
        }else{
            $article = new Article;
            $article->name = $request->input('name');
            $article->body = $request->input('body');
        }

        if($article->save()){
            return new ArticleResource($article);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get Article
        $article = Article::findOrFail($id);

        //Show Article 
        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if($article->delete())
        {
            return new ArticleResource($article);
        }
        
    }
}
