<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {
        $categories = Category::all();
        $articles = Article::all();

        return view('website.article', compact('articles'));
    }
    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('website.create-article', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'readtime' => 'required|string',
            'content' => 'required|string',
            'difficulty' => 'required|integer',
            'category_ids' => 'array',
        ]);

        $data['user_id'] = auth()->user()->id;
        $newArticle = Article::create($data);

        if (isset($data['category_ids'])) {
            $newArticle->category()->attach($data['category_ids']); // Attach categories
        }
        return redirect()->route('article');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('website.edit-article', ['article' => $article, 'categories' => $categories]);
    }
    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'readtime' => 'required|string',
            'content' => 'required|string',
            'difficulty' => 'required|integer',
            'category_ids' => 'array',
        ]);

        $article->update($data);

        if ($request->has('category_ids')) {
            $article->category()->sync($data['category_ids']); // Sync categories
        } else {
            $article->category()->detach(); // Remove all categories if none are selected
        }

        return redirect()->route('article');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article');
    }
}
