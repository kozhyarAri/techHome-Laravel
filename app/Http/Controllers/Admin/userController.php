<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|confirmed',
            'image' => 'nullable|mimes:png,jpg,jpeg,svg',
            'role' => 'required'
        ]);
        $imageName = null;
        if ($request->image) {
            $image = $request->image;
            $imageName = time() . hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/profile_image'), $imageName);
        }
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'password' => Hash::make($validated['password']),
            'image' => $imageName
        ]);

        if ($user) {
            return redirect()->route('user.index')->with('msg', 'User Added');
        }
        return redirect()->route('user.create')->with('msg', 'Somthing Wrong');
    }

    public function edit(string $id)
    {
        $user = User::findOrfail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrfail($id);
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|unique:users,email,' . $user->id . '|email',
            'password' => 'nullable|min:6|confirmed',
            'role' => 'required'
        ]);

        if ($request->password) {
            $user->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
                'password' => Hash::make($validated['password']),
            ]);
        } else {
            $user->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
            ]);
        }

        if ($user) {
            return redirect()->back()->with('msg', 'User Upadted');
        }
        return redirect()->back()->with('msg', 'Somthing Wrong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrfail($id);
        $path = 'assets/images/profile_image/' . $user->image;
        if ($user->image && file_exists($path)) {
            unlink($path);
        }
        $user->delete();
        return redirect()->back()->with('msg', 'User deleted');
    }
}
