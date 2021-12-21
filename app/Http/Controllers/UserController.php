<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $checked
     * @return \Illuminate\Http\Response
     */
    public function indexPost($checked)
    {
        
        if($checked==0){
            $users= User::where('isAdmin','0')->get();
        }
        else
            $users= User::where('isAdmin','1')->get();
        
        return view('adminPanel.users.listUser',compact('users','checked'));
    }

    public function index()
    {
        $users= User::where('isAdmin','0')->get();
        $checked=0;
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
            'username'=>['min:5','max:15','required'],
            'email'=>['required','regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/'],
            'password'=>['required','confirmed','regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'], //Minimum eight characters, at least one letter and one number
            
        ]);
        dd($request->whatIs);

        $user = new User();
        $user->username = $request->username;
        $user->email =$request->email;
        $user->password = bcrypt($request->password);
        if($request->whatIs=="Admin")
            $user->isAdmin=1;
        else $user->isAdmin=0;
    
        try {
            $user->save();

        } catch (\Exception $th) {
            if ($th->getCode() == 23000) {
                return back()->withErrors('Email or username has already been taken'); 
            }
            return back()->withErrors($th->getMessage()); 
        }

        toastr()->success('Success','User has been added');
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
        //
        return $id;
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
            'email'=>['required','regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/'],
            'old_password'=>['required_with:password','nullable','sometimes'],
            'password'=>['required_with:old_password','nullable','sometimes','confirmed','regex:^(?=\D*\d)(?=.*?[a-zA-Z]).*[\W_].{8,}$'], //Minimum eight characters, at least one letter and one number
            
        ]);
        if($request->password && $request->old_password){
            if(!Hash::check($request->old_password, $user->password)){
                return back()->withErrors('Your old password was not true');
            }    
            $user->password = bcrypt($request->password);
        }

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

        toastr()->success('Success','User has been updated');
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        User::findOrFail($id)->delete();

        toastr()->success('Success','User has been deleted');

        return redirect()->route('admin.user.index');

        
    }
}
