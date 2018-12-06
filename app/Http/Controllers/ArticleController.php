<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Contracts\Validation\Validator as Validator;
use App\Http\Requests\StoreBlogPost as StoreBlogPost;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ArticleController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Article::orderBy('created_at', 'desc')->get();
        return view("article.index", ["items" => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {     
        $validated = $request->validated();
        $article = new Article;
        $article->article = $validated['article'];
        $article->title = $validated['title'];
        $article->writer = Auth::user()->name;
        $article->save();
        return redirect('/article/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages = Article::paginate(5);
        $item = Article::find($id);
        // die(var_dump($pages));
        return view("article.show",["item" => $item, "pages" => $pages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("article.edit", ["id" => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->article = $request->input('article');
        $article->title = $request->input('title');
        $article->save();
        return redirect('/article/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('/article/');
    }
}
