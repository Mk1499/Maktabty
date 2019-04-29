<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'nationalid'=>'required',
            'password'=>'required',
            'phone'=>'required',
        ]);

        $user = User::find($id);
        $user->name =  $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->nationalid = $request->get('nationalid');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->save();

        return redirect('/home')->with('success', 'Contact updated!');
    }

}
