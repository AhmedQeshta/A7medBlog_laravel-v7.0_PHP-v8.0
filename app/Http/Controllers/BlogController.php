<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    function index() {
        $posts = Post::paginate(2);
        // $posts = Post::simplePaginate(2);
        return view('index' , ['posts' => $posts ]);
    }

    public function show($slug){
        // this fun use by controller from model(bulid it )
        $post = Post::findBySlug($slug);
        return view('post.show' , ['post' => $post ]);
    }

    function getBlog() {
        return view('Blog');
    }

    function  about() {
        return view('about');
    }

    function contact() {
        return view('contact');
    }
}
