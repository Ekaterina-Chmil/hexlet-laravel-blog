<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'asc')->paginate();
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(ArticleStoreRequest $request)
    {
        $article = new Article();
        $article->fill($request->validated());
        $article->save();

        return redirect()->route('articles.index')
                         ->with('success', 'Статья создана!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(ArticleUpdateRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->fill($request->validated());
        $article->save();

        return redirect()->route('articles.index')
                         ->with('success', 'Статья обновлена!');
    }

    public function destroy($id)
    {
    $article = Article::find($id);
    if ($article) {
        $article->delete();
    }
    return redirect()->route('articles.index')
                     ->with('success', 'Статья успешно удалена!');
    }
}
