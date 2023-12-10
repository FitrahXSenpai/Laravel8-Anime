<?php

namespace App\Http\Controllers;

use App\Models\DaftarAnime;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardDaftarAnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('dashboard.daftar-anime.index',[
            'title' => 'Dashboard Daftar Anime',
            'posts' => DaftarAnime::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('dashboard.daftar-anime.create',[
            'title' => 'Dashboard Create New Data Anime',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $credentials = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:daftar_animes',
            'genre' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:2024',
            'body' => 'required'
        ]);
        
        if($request->file('image')) {
            $credentials['image'] = $request->file('image')->store('daftar-anime-images');
        }

        $credentials['user_id'] = auth()->user()->id;
        $credentials['excerpt'] = Str::limit(strip_tags($request->body), 329);

        DaftarAnime::create($credentials);

        return redirect('/dashboard/daftar-anime')->with('success', 'New Data Has Beend Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarAnime  $daftarAnime
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarAnime $daftarAnime) {
        
        if($daftarAnime->author->id !== auth()->user()->id) {
            abort(403);
        }
        
        return view('dashboard.daftar-anime.anime', [
            'title' => 'Dashboard Deskripsi Anime ' . $daftarAnime->title,
            'post' => $daftarAnime
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarAnime  $daftarAnime
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarAnime $daftarAnime) {
        
        if($daftarAnime->author->id !== auth()->user()->id) {
            abort(403);
        }

        return view('dashboard.daftar-anime.edit',[
            'title' => 'Dashboard Edit Data Anime',
            'post' => $daftarAnime,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarAnime  $daftarAnime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarAnime $daftarAnime) {
        
        $rules = [
            'title' => 'required|max:255',
            'genre' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:2024',
            'body' => 'required'
        ];

        if($request->slug != $daftarAnime->slug) {
            $rules['slug'] = ['required', 'unique:daftar_animes'];
        }

        $credentials = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $credentials['image'] = $request->file('image')->store('daftar-anime-images');
        }

        $credentials['user_id'] = auth()->user()->id;
        $credentials['excerpt'] = Str::limit(strip_tags($request->body), 329);

        DaftarAnime::where('id', $daftarAnime->id)->update($credentials);

        return redirect('/dashboard/daftar-anime')->with('success', 'Data Has Beend Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarAnime  $daftarAnime
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarAnime $daftarAnime) {
        
        if($daftarAnime->image) {
            Storage::delete($daftarAnime->image);
        }

        DaftarAnime::destroy($daftarAnime->id);

        return redirect('/dashboard/daftar-anime')->with('delete', 'Data Has Beend Deleted!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(DaftarAnime::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
