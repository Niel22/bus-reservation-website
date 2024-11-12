<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function login(){
        return view('pages.auth.login');
    }

    public function register(){
        return view('pages.auth.register');
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'min:5'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $user = User::create($data);

        if($user){
            Auth::login($user);
            return redirect()->to(route('index'));
        }else{
            return back()->withErrors(['email', 'Problem Creating an account']);
        }

    }

    public function store(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect()->to(route('index'));
        }else{
            return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to(route('index'));
    }
}
