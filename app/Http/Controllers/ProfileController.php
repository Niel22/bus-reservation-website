<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        return view('pages.user.profile');
    }

    public function my_bookings(){
        return view('pages.user.my-bookings');
    }

    public function my_payments(){
        return view('pages.user.payment');
    }

    public function update(Request $request){
        $data = $request->validate([
           'mobile' => ['required', 'min:10', 'max:11'],
           'dob' => ['required'],
           'gender' => ['required', 'string'],
           'about' => ['required', 'min:20'] 
        ]);

        $user = User::where('id', Auth::id())->first();

        if($user){
            $user->user_details()->create($data);

            return redirect()->to(route('profile'));
        }else{
            return back()->withErrors(['mobile' => 'Problem updating details. Try again later']);
        }
        

    }
}
