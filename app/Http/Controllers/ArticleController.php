<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
  
    public function show($id)
    {
        //
        $posts=Article::whereId($id)->first();
        $article=Article::inRandomOrder()->orderBy('id')->paginate(5);
        return view('article.show',compact('posts','article'));
    } 
}