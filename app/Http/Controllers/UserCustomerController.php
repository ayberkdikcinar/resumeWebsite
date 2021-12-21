<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('isAdmin',0)->get();
        return view('adminPanel.users.customer.listCustomers',compact('users'));
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.users.customer.createCustomer');
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
            'password'=>['required','confirmed','regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'] //Minimum eight characters, at least one letter and one number

        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email =$request->email;
        $user->password = bcrypt($request->password);
        $user->isAdmin = 0;
    
        try {
            $user->save();

        } catch (\Exception $th) {
            if ($th->getCode() == 23000) {
                return back()->withErrors('Email or username has already been taken'); 
            }
            return back()->withErrors($th->getMessage()); 
        }

        toastr()->success('Success','Customer has been added');
        return redirect()->route('admin.userCustomers.index');

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
        
        return view('adminPanel.users.customer.editCustomer',compact('user'));
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
        //
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

        toastr()->success('Success','Customer has been deleted');

        return redirect()->route('admin.userCustomers.index');

        
    }
}
