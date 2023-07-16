<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticelsController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('id','DESC')->paginate('5');
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required'],
            'content'=>['required'],
            // 'image'=>['required','image','mimes:png,jpg,jpeg,gif,svg'],
        ]);

        //upload file

        $imagename = 'artcile_'.time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'),$imagename);

        Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$imagename,
        ]);

        return redirect()->route('admin.articles.index')->with('msg','Article added successfuly')->with('type','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
