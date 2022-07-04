<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit-user', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $users = User::find($user_id);

        $users->name = $request->input('name');

        if ($request->hasFile('image')) {

            $directory = 'images/user' . $users->image;
            if (File::exist($directory)) {
                # code...
                File::delete($directory);
            }

            $file = $request->file('image');
            $filename = 'image-' . time() . '-' . $file->getClientOriginalExtension();
            $users->image = $filename;
            $file->move('images/user', $filename);
        }

        $users->update();

        return redirect('admin/user')->with('status', 'user updated');
    }


    public function destroy($user_id)
    {

        $users = User::find($user_id);
        if ($users) {
            # code...
            $users->delete();
            return redirect('admin/user')->with('status', 'user deleted');
        } else {
            # code...
            return redirect('admin/user')->with('status', 'user id does not exist');
        }
    }
}
