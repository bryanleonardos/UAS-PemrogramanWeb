<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\ProductModel;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('Auth/Login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            // If you are logging in the user via email, change the username to email
            'password'  => 'required'
        ]);

        if (!\Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
           return redirect()->back()->with('status','Username/Password is Wrong');
        }

        if(\Auth::user()->role == 'admin')
        {
            return redirect()->route('admin'); 
        }
        
        return redirect()->route('home');     
    }
    public function getRegister()
    {
        return view('Auth/Register');
    }
    public function postRegister(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'birthday' => 'required',
            'gender' => 'required',
        ]);
       
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'birthday' => $request->birthday,
           'gender' => $request->gender,
        ]);
        
        //user login
        \Auth::loginUsingId($user->id);
        return redirect()->route('home');
    }
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}
