<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class deviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::all();
        return view('admin.device.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categores = Category::all();
        return view('admin.device.create', compact('categores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'review' => 'required',
            'ram' => 'required|numeric',
            'cpu' => 'required',
            'storage' => 'required',
            'main_camera' => 'required',
            'selfie_camera' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|mimes:png,jpg,jpeg,svg',
            'category_id' => 'required',
        ]);
        
        $image = $request->image;
        $imageName = time() . hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images/device_image'), $imageName);

        $device = Device::create([
            'name' => $validated['name'],
            'review' => $validated['review'],
            'ram'=> $validated['ram'],
            'cpu'=> $validated['cpu'],
            'storage'=> $validated['storage'],
            'main_camera'=> $validated['main_camera'],
            'selfie_camera'=> $validated['selfie_camera'],
            'price'=> $validated['price'],
            'category_id'=> $validated['category_id'],
            'user_id'=> Auth::user()->id,
            'image' => $imageName
        ]);

        if ($device) {
            return redirect()->route('device.index')->with('msg', 'Device Added');
        }
        return redirect()->route('device.create')->with('msg', 'Somthing Wrong');
    }

    public function edit(string $id)
    {
        $categores = Category::all();
        $device = Device::findOrfail($id);
        return view('admin.device.edit', compact(['device','categores']));
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
