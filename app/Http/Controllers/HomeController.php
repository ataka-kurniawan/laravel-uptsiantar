<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Proyek;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Manager;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil berita terbaru, urut dari terbaru ke lama
        $news = News::latest()->get();

        return view('home.index', compact('news'));
    }

    public function profile()
    {
        $managers = Manager::all();
        return view('home.profile',compact('managers'));
    }

    public function operasional()
    {
        $proyeks = Proyek::latest()->get();
        return view('home.operasional',compact('proyeks'));
    }

    public function publikasi()
    {
        $news = News::latest()->paginate(11);
        $galleries = Gallery::latest()->get();
        return view('home.publikasi', compact('galleries', 'news'));
    }

    public function k3()
    {
        return view('home.k3');
    }

    public function layanan()
    {
        return view('home.layanan');
    }
}
