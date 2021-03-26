<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;


class HomeController extends Controller
{
    //
    public function index(){
        $posts=Article::latest('id')->simplePaginate(5);
        return view('home', compact('posts'));
    }

    public function pergaulan(){
       
        $posts=Article::where('category_id',3)->simplePaginate(5);
        return view('home', compact('posts'));
    }
    public function sexual(){
       
        $posts=Article::where('category_id',4)->simplePaginate(5);
        return view('home', compact('posts'));
    }

    public function pencegahan(){
       
        $posts=Article::where('category_id',5)->simplePaginate(5);
        return view('home', compact('posts'));
    }

}