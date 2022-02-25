<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\MailController;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       
        $checked=$request->checkbox_val;

        if($checked==null){
            $users= User::where('isAdmin','0')->get();
        }
        else
            $users= User::where('isAdmin','1')->get();

        return view('adminPanel.users.listUser',compact('users','checked'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.users.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'username'=>['min:3','max:15','required'],
            'email'=>['required','regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/'],
            'password'=>['required','confirmed','min:8'], //Minimum eight characters, at least one letter and one number
            
        ]);
      

        $user = new User();
        $user->username = $request->username;
        $user->email =$request->email;
        $user->password = bcrypt($request->password);
        if($request->whatIs=="Admin")
            $user->isAdmin=1;
        else 
            $user->isAdmin=0;
    
        try {

            $user->save();
            if($user->isAdmin==0)
                MailController::mailSend($request);
 
                
        } catch (\Exception $th) {
            toastr()->error('An error has been occurred while adding the user.','Error');
            if ($th->getCode() == 23000) {
                return back()->withErrors('Email or username has already been taken'); 
            }
            return back()->withErrors($th->getMessage()); 
        }

        toastr()->success('User has been added.','Success');
        return redirect()->route('admin.user.index');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user = User::findOrFail($id);
        return view('adminPanel.users.userdetails',compact('user'));
        //return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('adminPanel.users.editUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                
        $user= User::findOrFail($id);

        $request->validate([
            'username'=>'min:5|max:15|required',
            'name'=>'min:3',
            'surname'=>'min:3',
            'email'=>['required','regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/']     
        ]);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->surname =$request->surname;
        $user->phone =$request->phone;
        $user->email =$request->email;

        try{
            $user->save();

        } catch (\Exception $th) {
            if ($th->getCode() == 23000) {
                return back()->withErrors('Email or username has already been taken'); 
            }
            return back()->withErrors($th->getMessage()); 
        }

        toastr()->success('User has been updated','Success');
        return redirect()->back();
    }


    public function changePassword(Request $request, $id){

        $user= User::findOrFail($id);

        $request->validate([
            'old_password'=>['required_with:password','nullable','sometimes'],
            'password'=>['required_with:old_password','nullable','sometimes','confirmed'], //Minimum eight characters, at least one letter and one number      
        ]);

        
        if(!Hash::check($request->old_password, $user->password)){
            toastr()->error('Your password could not be changed.','Error');
            return back()->withErrors('Your old password was not true');
        }  

        $user->password = bcrypt($request->password);
        

        try{
            $user->save();

        } catch (\Exception $th) {
            toastr()->error('Your password could not be changed.','Error');
            return back()->withErrors($th->getMessage()); 
        }

        toastr()->success('Your password has been changed','Success');
        return redirect()->back()->with('message', 'Your password has been changed successfully.');

    }

    public function displayPDF($id){
        $user = User::findOrFail($id);
        return view('adminPanel.users.test_pdf',compact('user'));
    }

    public function generatePDF($id){
        $user = User::findOrFail($id);
        
        $pdf = app('dompdf.wrapper');
        $pdf->setOptions(['isRemoteEnabled' => TRUE, 'enable_javascript' => TRUE, 'setIsHtml5ParserEnabled' => TRUE, 'dpi' => 136]);
        $html = view('adminPanel.users.test_pdf',compact('user'))->render();
        $pdf->loadHtml($html);
        

        return $pdf->download('resume.pdf');  
    }

  /*  public function downloadFile($path){
        return response()->download(public_path($path));   
        
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $path = 'uploads/'.$user->username;
        if (File::exists($path)) File::deleteDirectory($path);
        toastr()->success('User has been deleted','Success');

        return redirect()->route('admin.user.index');

        
    }
}
