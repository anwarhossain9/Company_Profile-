<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function index()
    {
        $users = User::all(); // Only active users
        return view('backend.users.index', compact('users'));
    }

    // Edit Form
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit', compact('user'));
    }

    // profile Form
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.profile', compact('user'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->only(['name', 'email', 'phone']));
        
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Soft Delete
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', 'User soft deleted.');
    }

    // View Deleted Users
    public function trash()
    {
        $users = User::onlyTrashed()->get();
        return view('users.trash', compact('users'));
    }

    // Restore
    public function restore($id)
    {
        User::withTrashed()->findOrFail($id)->restore();
        return back()->with('success', 'User restored.');
    }

    // Permanent Delete
    public function forceDelete($id)
    {
        User::onlyTrashed()->findOrFail($id)->forceDelete();
        return back()->with('success', 'User permanently deleted.');
    }
}
