<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class admincontroller extends Controller
{
    public function admin(Request $request)
    {
    $admin = admin::where('admin_name','=',$request->name)->first();
    if($admin){
        if(Hash::check($request->password , $admin->admin_password)){
            return redirect('dash');

        }else{

            return redirect('use');
        }
    }
}
}