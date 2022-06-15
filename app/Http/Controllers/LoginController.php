<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(array(
            'login' => $input['login'],
            'password' => $input['password']
        ))) {
            return redirect()->route('index2');
        } else {
            return redirect()->route('login')->with('error',"Логин или пароль неверны");
        }
    }
    // public function login(Request $request)
    // {
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'login' => 'required',
    //         'password' => 'required',
    //     ]);
    //     if (auth()->attempt(array(
    //         'login' => $input['login'],
    //         'password' => $input['password']
    //     ))) {
    //     if (auth()->user()->is_admin == 1) {
    //         return redirect()->route('admin.home');
    //     } else {
    //         return redirect()->route('about');
    //     }
    //     } else {
    //         return redirect()->route('login')->with('error',"Логин или пароль неверны");
    //     }
        
        
    // }
}
