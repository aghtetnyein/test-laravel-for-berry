<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::all();

        return view('articles.index', [
                'articles' => $data
        ]);
    }


    public function detail($id) 
    {
        // return "Controller - Article Detail - $id";
        $data = Article::find($id);
        
        return view('articles.detail', [
            'article' => $data
        ]);
    }

    public function add() {
        $data = [
            [ "id" => 1, "name" => "News" ],
            [ "id" => 2, "name" => "Tech" ],
            [ "id" => 3, "name" => "Personal" ],
        ];
        
        return view('articles.add', [
                    'categories' => $data
        ]);
   }



    public function create() {
        
        $article = new Article;

        $article->title = request()->title; 
        $article->body = request()->body; 
        $article->category_id = request()->category_id; 
        $article->save();

        return redirect('/articles');
    }

    public function delete($id)
    {
        $article = Article::find($id); 
        $article->delete();

        return redirect('/articles')->with('info', 'Article deleted'); 
    }
}
