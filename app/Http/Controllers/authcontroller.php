<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authcontroller extends Controller
{
    //
    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }

    public function sign_up(Request $request){
        $valdition=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'conf_password'=>'required',
            'image'=>'required',
            'role'=>'required'

            ]) ;  
            $pass=$request->password;
            $conf=$request->conf_password;

            if($valdition){
                if($pass==$conf){
                    $image=$request->file('image');
                    $extension=$image->getClientOriginalExtension();
                    $image_name=time().'.'.$extension;
                    $image_name_path='/storage/pics/'.$image_name;
                    $image->move('storage/pics',$image_name);
                    $insert=User::create([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>Hash::make($request->password),
                        'role'=>$request->role,
                        'image'=>$image_name_path
                        ]);
                        if($insert){
                            return redirect('/');
                        }
                }
                else{
                    return "password is not match";
                }
            } 
    }
    public function log_in(Request $request){
    
            $email=$request->email ;
            $uson=User::where('email','=',$email)->first();
            if (Hash::check($request->password,$uson->password)) {
                $role=$uson->role;
                session::put('name',$uson->name);
                session::put('role',$uson->role);


            if($role=='admin'){
                return redirect()->to('/admin');
                
            }
            else if($role=='vendor'){
                return redirect()->to('/vendor');
            }
            else{
                return redirect()->to('/user');
            }
            }
            else{
                return "password is not correct";
            }}
           
       
public function admin(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('admin.admin',compact('session','user'));
}
public function vendor(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('vendor.vendor',compact('session','user'));
}
public function user(){
    if(session::has('name')){
        $session=session::get('name');
    }
    $user=User::where('name','=',$session)->first();
    return view('user.user',compact('session','user'));
}
public function logout(){
    session::forget('name');
    session::forget('role');
    return redirect()->to('/');
}




}