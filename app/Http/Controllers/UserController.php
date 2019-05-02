<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Rule;
use App\Http\Controllers\UserController;
use Validator;


class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('/home', compact('user'));
    }
    
    public function update(User $user)
    {
        $this->validate(request(), [
            'name' => 'required',
            'username'=>'required',
            'email' => 'required',
            'nationalid'=>'required',
            'password' => 'required',
            'phone'=>'required',
        ]);

        $user->name =  $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->nationalid = $request->get('nationalid');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->save();

        return back();
    }

}
