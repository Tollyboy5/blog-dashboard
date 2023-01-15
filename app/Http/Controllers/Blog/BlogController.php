<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index (){
        
        $posts = Post::all();
        return view('pages.blog', compact('posts'));
    }

    public function singlePost(Request $request, $id){
        
        $post = Post::find($id);
        return view('pages.blog-single',compact('post'));
    }
}
