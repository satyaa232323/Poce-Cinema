<?php


namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        return view('pages.admin.dashboard');
    }

    public function create(){
        return view('pages.admin.index');
    }

    public function viewData(){
        $movies = Movies::all();
        return view('pages.admin.table', ['movies' => $movies]);
    }
    public function store(Request $request){
        $data = $request->all();

        $newMovie = Movies::create($data);
        return redirect()->route('home');
    }

    public function edit(Movies $movies){
        return view('pages.admin.edit', ['movie' => $movies]);


    }

    public function update(Movies $movies, Request $request){
        $data = $request->validate([
            'title' =>'required',
            'year' =>'required',
            'price' =>'required',
            'description' =>'required',
            'cover' =>'required',
            'gallery' =>'required',
            'category' =>'required',
        ]);

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('assets', 'public');
            $data['gallery'] = $request->file('gallery')->store('assets', 'public');
        }

        $movies->update($data);
        return redirect()->route('home')->with('data berhasil di edit');

    }

    public function destroy(Movies $movies){
        $movies->delete();
        return redirect()->route('home');
    }




}
