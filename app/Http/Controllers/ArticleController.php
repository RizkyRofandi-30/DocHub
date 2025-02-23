<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles', compact('articles'));
    }

    public function create()
    {
        return view("admin.upload-articles");
    }

    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'author' => $request->author,
            'category' => $request->category,
            'body' => $request->body,
        ]);

        return redirect()->route("admin.home");
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles');
    }

    public function show($id)
    {
        $articles = Article::where('id', $id)->get();

        return view('Pengguna.artikel', compact('articles'));
    }
}
