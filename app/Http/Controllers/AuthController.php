<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function registration(){
        return view('auth.register');
    }
    public function registeruser(request $request){
        $valdition=$request->validate([
         'name'=>'required',
         'email'=>'required|email|unique:users',
         'password'=>'required|min:5'
        ]) ;
        if($valdition){
            $insert=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
            ]);
            if($insert){
             return "yes";
            } 
            else{
                return redirect()->back();
            }
        }
    }
    public function login(){
        return view('auth.login');

    }
    public function loginuser(Request $request){
        $valdition=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
           ]) ;
           if($valdition){
           $user=User::where('email','=',$request->email)->first();
           if($user){
            if(Hash::check($request->password,$user->password)){
                $name=$user->name ;
                session::put('name',$name);
                return redirect()->to('en/dashboard');
            }
            else{
                return "password is wrong";
            }
           }else{
            return "email is not correct u need to signup";
           }
        }
    }
    public function dashboard(){
        if(session::has('name')){
            $name=session::get('name');
        }
        return view('auth.dashboard',compact('name'));
    }
     
    public function logout(){
        session::forget('name');
        return redirect()->to('en/login');

    }

}