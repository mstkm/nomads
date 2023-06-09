<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
  public function index() {
    return view('auth.login');
  }

  public function authenticate(Request $request) {
    $credentials = $request->validate([
      'email' => 'required|email:dns',
      'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended('/admin');
    }

    return back()->with('loginError', 'Wrong username or password');
  }

  public function logout(Request $request): RedirectResponse {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
  }

  public function logoutNotFound() {
      return view('/not-found');
  }
}
