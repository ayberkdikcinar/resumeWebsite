<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    //

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->isAdmin){
                return redirect()->route('admin.user.index');
            }      
            else{
                if($user->first_login){
                    $user = User::find(Auth::user()->id);
                    $user->first_login = 0;
                    $user->save();
                    Auth::setUser($user);
                    return redirect()->route('resume.about'); 
                }
                    
                else return redirect()->route('profile'); 
            }
                
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('index');
    }
    public function logoutGet(){

        Auth::logout();
        return redirect()->route('index');
    }

}
