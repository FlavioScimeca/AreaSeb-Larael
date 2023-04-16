<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function welcome_show(){
        $articles = Article::paginate(3);
        return view("welcome", compact("articles"));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $articles = Article::where("user_id", $user_id)->get();
        return view("article.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $article = Article::find($request->article_id);
        return view("article.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $article_id = $request["article_id"];

        return view("article.edit", ["article_id" => $article_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
