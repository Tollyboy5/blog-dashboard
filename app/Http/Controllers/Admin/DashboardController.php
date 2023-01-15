<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $category = Category::all()->count();
        $post = Post::all()->count();
        $user = User::all()->count();
        return view('admin.admin-dashboard', compact('category','post','user'));
    }
}
