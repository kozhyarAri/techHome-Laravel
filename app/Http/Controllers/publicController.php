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
        $devices = Device::latest()->orderBy('id','DESC')->take(6)->get();
        return view('public.index',compact(['info','categorys','devices']));
    }
    public function deviceDetail($id){
        $device = Device::findOrFail($id);
        $device->view_counts++;
        $device->save();
        return view('public.deviceDetail',compact('device'));
    }

    public function devices($id){
        $categorys = Category::all();
        if($id > 0){
            $devices = Device::latest()->where('category_id',$id)->orderBy('id','DESC')->paginate(9);
        }else{
            $devices = Device::latest()->orderBy('id','DESC')->paginate(9);
        }
        return view('public.devices',compact(['categorys','devices']));
    }
}
