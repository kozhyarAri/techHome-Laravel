<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Device;
use App\Models\info;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function index(){
        $info = info::first();
        $categorys = Category::all();
        $devices = Device::latest()->take(6)->get();
        return view('public.index',compact(['info','categorys','devices']));
    }
    public function deviceDetail($id){
        $device = Device::findOrFail($id);
        return view('public.deviceDetail',compact('device'));
    }
}
