<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function store(Request $request) {
        $request->validate([
            
            'login' => ['required', 'string', 'max:255', 'unique:users'],
            
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'rules'=>['required'],
            ]);
//2 способ
$user=User::create([
    'password'=>Hash::make($request->password),
    'rules'=>$request->rules=='on'?'1':'0',
] + $request->all());
return Redirect()->back()->withSuccess("Пользователь успешно добавлен!");
}

}
