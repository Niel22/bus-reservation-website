<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function store(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect()->to(route('admin.dashboard'));
        }else{
            return back()->withErrors(['email' => 'Invalid email or password. Check and try again']);
        }
    }
}
