<?php

namespace App\Http\Controllers;

use App\Models\EmailMessage;
use Illuminate\Http\Request;

class EmailMessageController extends Controller
{
    
    public function index()
    {
        $emailMessage = EmailMessage::latest()->orderBy('id','DESC')->paginate(20);
        return view('admin.emailMessage.index',compact('emailMessage'));
    }

    public function show(string $id)
    {
        $message = EmailMessage::findOrFail($id);
        $message->state = 1;
        $message->save();
        return view('admin.emailMessage.detail',compact('message'));
    }


    public function destroy(string $id)
    {
        $message = EmailMessage::findOrFail($id);
        if($message){
            $message->delete();
            return redirect()->back()->with('msg','Message Delete!!!');
        }else{
            return redirect()->back()->with('msg','Message Not Found!!!');
        }
    }
}
