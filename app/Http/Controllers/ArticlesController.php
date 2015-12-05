<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{

  public function index ()
  {


    // order by latest publihed comes first in the list
    $articles = Article::latest('published_at')
      ->published()
      ->get();

    return view('articles.index', compact('articles'));

  }

  public function show($articleId)
  {

    $article = Article::findOrFail($articleId);

    return view('articles.show', compact('article'));
  }

  public function create()
  {

    return view('articles.create');

  }

  public function store(CreateArticleRequest $request)
  {

    Article::create($request->all());

    return redirect('articles');

  }


}
