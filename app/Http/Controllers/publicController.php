<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Device;
use App\Models\EmailMessage;
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
    public function about(){
        $info = info::select(['about'])->first();
        return view('public.about',compact('info'));
    }

    public function contact(){
        return view('public.contact');
    }

    public function sendEmail(Request $request){
        $validate = $request->validate([
            'email'=>'string|email',
            'name' => 'string',
            'message' => 'string|max:1000'
        ]);
        $email = EmailMessage::create($validate);

        if($email){
            return redirect()->back()->with('msg','Email Sended..');
        }else{
            return redirect()->back()->with('msg','SomeThing Wrong');
        }
    }
}
