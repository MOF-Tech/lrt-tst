<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fetch post
        $Posts=Post::paginate(5);
        // $Posts = Post::all()->paginate(5);
        return view('pages.post')->with('posts',$Posts);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $this->validate($request,[
           'title' => 'required',
           'body'=>'required'
       ]);

       $blog = new Post;
       $blog->title = $request->input('title');
       $blog->body = $request->input('body');
       $blog->save();

       redirect('/posts')->with('success','you did it you succesfully created a blog');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $blog = Post::find($id);
        return view('pages.blog') ->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $blog = Post::find($id);
        return view('pages.edit') ->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //

        $this->validate($request,[
            'title' => 'required',
            'body'=>'required'
        ]);
 
        $blog = Post::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->save();
 
        redirect('/posts')->with('success','you did it you succesfully updated
         a blog');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
