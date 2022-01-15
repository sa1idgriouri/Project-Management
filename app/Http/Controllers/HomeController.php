<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    //
    function index()
    {

        $Posts  = Post::paginate(4);
        return view('home')->with([
            "Posts" => $Posts
        ]);
    }



    public function show($slug)
    {
        $post  = Post::where("slug", $slug)->first();

        return view('showdetails')->with([
            "Post" => $post
        ]);
    }

    public  function create()
    {
        return view("create");
    }


    public  function createPost(Request $request)
    {


        $storeData = $request->validate([
            'title' => 'required|min:5|max:255',
            'body' => 'required|max:255',


        ]);
        Post::create(
            [
                'title' => $request->title,
                'body'   => $request->body,
                'slug'    => Str::slug($request->title),
                'image' => "https://hddesktopwallpapers.in/wp-content/uploads/2015/09/bee-image.jpg",

            ]
        );

        return redirect('/')->with('completed', 'Post has been saved!');
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body   = $request->body;
        // $post->slug    = Str::slug($request->title);
        // $post->image   = "https://hddesktopwallpapers.in/wp-content/uploads/2015/09/bee-image.jpg";
        // $post->save();
    }

    public  function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('edit')->with([
            "post" => $post
        ]);
    }

    public  function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->update([

            'title' => $request->title,
            'body'   => $request->body,
            'slug'    => Str::slug($request->title),
            'image' => "https://hddesktopwallpapers.in/wp-content/uploads/2015/09/bee-image.jpg",

        ]);

        return redirect('/')->with('completed', 'Post has been update!');
    }

    public  function delete($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->delete();

        return redirect('/')->with('completed', 'Post has been update!');
    }
}
