<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        // $posts = Post::where('user_id', auth()->id())->get();
        //dump($posts);
        //dd(auth()->user()->posts);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::get();
        // return view('posts.create',compact('categories'));
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Fetch the request
             //dd($request->all());
        // Do a validation
            $request->validate([
                'title' => 'required|unique:posts|max:255',
                'body' => 'required',
            ]);
        // Store to database
            $post = Post::create([
                'title'       => $request->title,
                'body'        => $request->body,
                'category_id' => $request->category,
                'user_id'     => auth()->id(),
            ]);
        // Return back with message
            return redirect()->route('posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id) // Post::find($id)
    {
        //dd($id);
        $post = Post::find($id);
        // $post = Post::where('id', $id)->first();
        // $categories = Category::get();
        // return view('posts.show', compact('categories'));

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //fetch the id
        //update
        //redirect to specific page

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
