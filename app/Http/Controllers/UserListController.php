<?php

namespace App\Http\Controllers;

use App\Models\Court;
use App\Models\CourtImage;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserListController extends Controller
{
    public function index()
    {
        $users = User::get();
        return inertia('Admin/User/index', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->isAdmin = $request->isAdmin;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Admin created successfully.');
    }

    

    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    
}
