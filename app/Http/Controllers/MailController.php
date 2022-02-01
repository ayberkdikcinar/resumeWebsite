<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Notification;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailView($id)
    {   
        $user = User::findOrFail($id);
        return view('adminPanel.mail.mailView',compact('user'));
    }
       
    public static function mailSend(Request $request)
    {
        $input = $request->validate([
            'email' => 'required',
        ]);
     
        $name=null;
        $deletefilePath=null;
        $filename=null;

        $path = public_path('uploads');

        if($request->file('attachment')){
            $attachment = $request->file('attachment');
            $name = time().'.'.$attachment->getClientOriginalExtension();
            $attachment->move($path, $name);
    
            $filename = $path.'/'.$name;
            $deletefilePath = 'uploads/'.$name;
        }
            
        try {
          
            Mail::to($input['email'])->send(new Notification($filename,$request));
            if($deletefilePath!=null)
                File::delete(public_path($deletefilePath));

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Mail sent successfully.');
    }
}


