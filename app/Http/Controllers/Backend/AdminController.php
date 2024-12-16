<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect('/admin/dashboard');
        }
        return view('backend.login');
    }
    public function loginUser(Request $request)
    {
        $data = $request->all();
        $attemptData = array("email" => $data['email'], "password" => $data['password']);
        if (Auth::attempt($attemptData)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        } else {
            return back()->withErrors([
                'errors' => 'Invalid Email Or Password.',
            ]);
        }
    }
    public function register()
    {
        $count = User::count();
        if($count >0){
            return redirect('/admin/login');
        }
        return view('backend.register');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function registerUser(Request $request)
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/admin/login')->with('success', 'Registration successful. Please login.');
    }
}