<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();
        $posts = Post::all();
        return view('admin.post.index', compact('posts','category'));
    }

    public function create()
    {
        return view('admin.post.add-post');
    }

    public function store(Request $request)
    {
        //$request->validate();
        $post = new Post();

        $post->name = $request->input('name');
        $post->slug = Str::slug($request->input('slug'));
        $post->description = $request->input('description');
        $post->yt_iframe = $request->input('yt_iframe');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'image-' . time() . '-' . $file->getClientOriginalExtension();
            $post->image = $filename;
            $file->move('images/post', $filename);
        }

        $post->meta_title = $request->input('meta_title');
        $post->meta_description = $request->input('meta_description');
        $post->meta_keyword = $request->input('meta_keyword');
        $post->status = $request->status == true ? '1' : '0';
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect('admin/post')->with('status', 'post created');
    }

    public function edit($post_id)
    {
        $cate = Post::find($post_id);
        return view('admin.post.edit-post', compact('cate'));
    }

    public function update(Request $request, $post_id)
    {
        $post = Post::find($post_id);

        $post->name = $request->input('name');
        $post->slug = Str::slug($request->input('slug'));
        $post->description = $request->input('description');

        if ($request->hasFile('image')) {

            $directory = 'images/post' . $post->image;
            if (File::exist($directory)) {
                # code...
                File::delete($directory);
            }

            $file = $request->file('image');
            $filename = 'image-' . time() . '-' . $file->getClientOriginalExtension();
            $post->image = $filename;
            $file->move('images/post', $filename);
        }

        $post->meta_title = $request->input('meta_title');
        $post->meta_description = $request->input('meta_description');
        $post->meta_keyword = $request->input('meta_keyword');
        $post->status = $request->navbar_status == true ? '1' : '0';
        $post->status = $request->status == true ? '1' : '0';
        $post->user_id = Auth::user()->id;
        $post->update();

        return redirect('admin/post')->with('status', 'post updated');
    }

    public function destroy($post_id)
    {

        $post = Post::find($post_id);
        if ($post) {
            # code...
            $post->delete();
            return redirect('admin/post')->with('status', 'post deleted');
        } else {
            # code...
            return redirect('admin/post')->with('status', 'post id does not exist');
        }
    }
}
