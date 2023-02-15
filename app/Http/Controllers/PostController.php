<?php
    
namespace App\Http\Controllers;
    
use App\Models\Post;
use Illuminate\Http\Request;
    
class PostController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::get();
        
        $posts = Post::latest()->paginate(15);
        
        return view('posts.index',compact('posts'))->with('i', (request()->input('page', 1) - 1) * 15);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $formFields = $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'is_published' => 'required',
        ]);

        if($request->hasFile('image')) {
            // ako ima dodaj u storage/app/public/logos/
            $formFields['image'] = $request->file('image')->store('images', 'public');            
        }
        
        $formFields['user_id'] = auth()->id();
        $formFields['author'] = auth()->user()->name;
        $formFields['is_published'] = $request->input('is_published');

        Post::create($formFields);
        
    
        return redirect()->route('posts.index')
                        ->with('success','Objava uspješno napravljena.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
        // return view('showBlogPost',compact('post'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'detail' => 'required',
            
            'is_published' => 'required',
        ]);

        if($request->hasFile('image')) {
            // ako ima dodaj u storage/app/public/logos/
            $formFields['image'] = $request->file('image')->store('images', 'public');            
        }
        
        $formFields['user_id'] = auth()->id();
        $formFields['author'] = auth()->user()->name;
        $formFields['is_published'] = $request->input('is_published');

        //$post->update($request->all());
        $post->update($formFields);
    
        return redirect()->route('posts.index')
                        ->with('success','Objava uspješno promjenjena');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Objava uspješno obrisana');
    }

    /**
     * Publish the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function publish(Post $post)
    {
        $formFields['is_published'] = '1';
        $post->update($formFields);
    
        return redirect()->route('posts.index', compact('post'))
                        ->with('success','Objavljeno!');
    }

}