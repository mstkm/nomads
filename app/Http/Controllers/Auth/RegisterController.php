<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    public function index () {
      return view('auth.register');
    }

    public function register(Request $request) {
      $validateData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:6|max:255|confirmed'
      ]);
      $validateData['password'] = Hash::make($validateData['password']);
      $validateData['is_admin'] = 0;

      $user = User::create($validateData);

      event(new Registered($user));

      session()->flash('success', 'Registration successfull. Please login!');

      return redirect('login');
    }
}
