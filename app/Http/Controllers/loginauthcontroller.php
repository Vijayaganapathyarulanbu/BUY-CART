<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginauthcontroller extends Controller
{
    public function login(){
        return view("auth.Login") ;
    }
    public function register(){
        return view("auth.Register");
    }
    public function registerUser(Request $request){
      
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8',
    ]);


    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = $validatedData['password'];
    $user->save();


   return redirect('/success');
    }



    public function loginuser(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if($request->password == $user->password){

                Auth::login($user);
                return redirect('use');

            }else{

                return back()->with('fail','Incorrect password.');
            }
        }else{

            return back()->with('fail','This email is not registered.');
        }


}
}
