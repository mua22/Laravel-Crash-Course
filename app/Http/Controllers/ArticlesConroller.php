<?php

namespace App\Http\Controllers;

use App\Article;
use App\Ingredient;
use App\User;
use Illuminate\Http\Request;

class ArticlesConroller extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);
        $page_title = 'All Articles';
        return view('articles.index',compact('articles','page_title'));
    }
    public function indexTest()
    {
        $articles = Article::with('user')->paginate(50);
        $page_title = 'All Articles';
        return view('articles.indexTest',compact('articles','page_title'));
    }

    public function byUser($id)
    {
        $user = User::find($id);
        $page_title = 'Showing All Articles by '.$user->name;
        $articles = $user->articles()->paginate(2);
        return view('articles.index',compact('articles','page_title'));
    }
    public function byIngredient($id)
    {
        $ingredient = Ingredient::find($id);
        $page_title = 'Articles Which include '.$ingredient->title;
        $articles = $ingredient->articles()->paginate(2);
        return view('articles.index',compact('articles','page_title'));
    }
}