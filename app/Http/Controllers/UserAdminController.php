<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = User::where('isAdmin',1)->get();
        return view('adminPanel.users.admin.listAdmins',compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.users.admin.createAdmin');
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
                'username'=>'min:5|max:15|required',
                'name'=>'min:3',
                'surname'=>'min:3',
                'email'=>['required','regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/'],
                'password'=>['required','confirmed','regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'] //Minimum eight characters, at least one letter and one number
    
            ]);

            $user = new User();
            $user->username = $request->username;
            $user->name = $request->name;
            $user->surname =$request->surname;
            $user->phone =$request->phone;
            $user->email =$request->email;
            $user->password = bcrypt($request->password);
            $user->isAdmin = 1;
            
            try {
                $user->save();

            } catch (\Exception $th) {
                if ($th->getCode() == 23000) {
                    return back()->withErrors('Email or username has already been taken'); 
                }
                return back()->withErrors('Unexpected Error'); 
            }
           
            toastr()->success('Success','Admin has been added');
            return redirect()->route('admin.userAdmins.index');

              
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
        
        return view('adminPanel.users.admin.editAdmin',compact('user'));
        
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
            'password'=>['nullable','confirmed','regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'] //Minimum eight characters, at least one letter and one number

        ]);
        if($request->password && $request->old_password && $request->password_confirmation){
            if(!Hash::check($request->old_password, $user->password)){
                return back()->withErrors('Your old password is not true');
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

        toastr()->success('Success','Admin has been updated');
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

        toastr()->success('Success','Admin has been deleted');

        return redirect()->route('admin.userAdmins.index');

    }
    
}
