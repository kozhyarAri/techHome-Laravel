<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\info;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function index()
    {
        $info = info::get()->first();
        return view("admin.info.index",compact('info'));
    }


    public function edit(string $id)
    {
        $info = info::findOrFail($id);
        return view('admin.info.edit',compact('info'));
    }

    public function update(Request $request, string $id)
    { // homeTitle homeSubTitle about facebookLink intsaLink xLink phoneNumber created_at updated_at
        
        $info = info::findOrFail($id);
        $validated = $request->validate([
            'homeTitle'=>'required|string',
            'homeSubTitle'=>'required|string',
            'about'=>'required|string',
            'facebookLink'=>'required|string',
            'intsaLink'=>'required|string',
            'xLink'=>'required|string',
            'phoneNumber'=>'required|string',
        ]);
        $info->update($validated);
        return redirect()->back()->with('msg','Info Updated..');
    }
}
