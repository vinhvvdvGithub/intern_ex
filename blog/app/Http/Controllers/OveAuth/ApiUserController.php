<?php

namespace App\Http\Controllers\OveAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
    //

    // public function create(){
    //     return view('Auth/register');
    // }

    public function register(Request $request){
        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password =Hash::make($request['password']);
        $user->save();

        return response()->json($user);
    }
    //get login
    // public function getLogin(){
    //     return view('Auth/Login');
    // }
    //
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
           $user = Auth::user();
            return response()->json($user);
        
        }else{
            dd("login error");
        }
        
    }
}
