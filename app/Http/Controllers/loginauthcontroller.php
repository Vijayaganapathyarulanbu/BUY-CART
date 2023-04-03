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
       // validate form data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8',
    ]);

    // create new user
    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = $validatedData['password'];
    $user->save();

   // redirect to success page
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
                // If the password is correct, log in the user
                Auth::login($user);
                return redirect('use');
                
            }else{
                // If the password is incorrect, show an error message
                return back()->with('fail','Incorrect password.');
            }
        }else{
            // If the user is not found, show an error message
            return back()->with('fail','This email is not registered.');
        }
    
    
}
}