<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class   NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }
    public function create()
    {
//        return view('news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:news',
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($data['title']);
        News::create($data);

        return redirect()->route('news.index');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|unique:news,title,' . $news->id,
            'content' => 'required',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $news->update($data);

        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }

    public function show($slug)
    {
        $news = News::where('slug',$slug)->firstOrFail();
        return view('news.show',compact('news'));
    }
}
