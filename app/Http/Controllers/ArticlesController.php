<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tag;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticlesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['only'=> 'create']);
  }

  public function index ()
  {

    // order by latest publihed comes first in the list
    $articles = Article::latest('published_at')
      ->published()
      ->get();

    return view('articles.index', compact('articles'));

  }

  public function show(Article $article)
  {
    return view('articles.show', compact('article'));
  }

  public function create()
  {

    $tags = Tag::lists('name', 'id');

    return view('articles.create', compact('tags'));

  }

  public function store(ArticleRequest $request)
  {

    $this->createArticle($request);

    flash()->overlay('Your article has been created', 'Good job');

    return redirect('articles');
  }

  public function edit(Article $article)
  {

    $tags = Tag::lists('name', 'id');
    return view('articles.edit', compact('article', 'tags'));

  }

  public function update(Article $article, ArticleRequest $request)
  {

    $article->update($request->all());

    //update articles tags, deletes old tags and inserts new ones selected
    $this->syncTags( $article, $request->input('tag_list'));

    return redirect('articles');

  }

  private function syncTags( Article $article, array $tags)
  {
    $article->tags()->sync($tags);
  }

  private function createArticle($request)
  {
    $article = \Auth::user()->articles()->create($request->all());
    //update the created article with associated tags from the form
    $this->syncTags( $article, $request->input('tag_list'));

    return $article;
  }

}
