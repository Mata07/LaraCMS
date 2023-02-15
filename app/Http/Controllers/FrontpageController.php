<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::get();
        $posts = Post::latest()->where('is_published', '1')->paginate(5);
        return view('frontpage',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Post $post)
    {
        return view('showBlogPost',compact('post'));
    }

    public function about() 
    {
        return view('about');
    }

    public function contact() 
    {
        return view('contact');
    }
}