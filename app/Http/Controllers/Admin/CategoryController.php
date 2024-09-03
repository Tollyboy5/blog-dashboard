<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Admin\CategoryFormRequest;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.add-category');
    }

    public function store(Request $request)
    {
        //$request->validate();
        $category = new Category();

        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('slug'));
        $category->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'image-' . time() . '-' . $file->getClientOriginalExtension();
            $category->image = $filename;
            $file->move('images/category', $filename);
        }

        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->user_id = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('status', 'category created');
    }

    public function edit($category_id)
    {
        $cate = Category::find($category_id);
        return view('admin.category.edit-category', compact('cate'));
    }

    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);

        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('slug'));
        $category->description = $request->input('description');

        if ($request->hasFile('image')) {

            $directory = 'images/category' . $category->image;
            if (File::exist($directory)) {
                # code...
                File::delete($directory);
            }

            $file = $request->file('image');
            $filename = 'image-' . time() . '-' . $file->getClientOriginalExtension();
            $category->image = $filename;
            $file->move('images/category', $filename);
        }

        $category->meta_title = $request->input('meta_title');
        $category->meta_description = $request->input('meta_description');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->user_id = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('status', 'category updated');
    }

    public function destroy($category_id)
    {

        $category = Category::find($category_id);
        if ($category) {
            # code...
            $category->delete();
            return redirect('admin/category')->with('status', 'category deleted');
        } else {
            # code...
            return redirect('admin/category')->with('status', 'category id does not exist');
        }
    }
}
