<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|max:2048',
        ]);

        $path = $request->hasFile('image') 
            ? $request->file('image')->store('news', 'public') 
            : null;

        News::create([
            'title'   => $request->title,
            'content' => $request->input('content'),
            'image'   => $path,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

  public function update(Request $request, $id)
{
    $news = News::findOrFail($id);

    $request->validate([
        'title'   => 'required|string|max:255',
        'content' => 'required|string',
        'image'   => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $imagePath = $request->file('image')->store('news', 'public');
    } else {
        $imagePath = $news->image;
    }

    $news->update([
        'title'   => $request->title,
        'content' => $request->input('content'),
        'image'   => $imagePath,
    ]);

    return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui!');
}

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus!');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('home.news', compact('news'));
    }
}
