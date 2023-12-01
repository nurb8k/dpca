<?php

namespace App\Http\Controllers\Auth2;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $request->validate([
                'full_name' => 'required|string|max:255',
                'org_name' => 'required|string|max:255',
                'landline_phone' => 'required|string|max:255',
                'mobile_phone' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6'
            ],[
                'full_name' => 'Пожалуйста, введите имя',
                'org_name' => 'Пожалуйста, введите название организации',
                'landing_phone' => 'Пожалуйста, введите номер телефона',
                'mobile_phone' => 'Пожалуйста, введите номер телефона',
                'email' => 'Пожалуйста, введите email',
                'password' => 'Пожалуйста, введите пароль',
            ]);

            $user = User::create([
                'full_name' => $request->full_name,
                'org_name' => $request->org_name,
                'landline_phone' => $request->landline_phone,
                'mobile_phone' => $request->mobile_phone,
                'email' => $request->email,
                'password' => Hash::make($request->input('password')),
            ]);

            Auth::login($user);
            return redirect(app()->getLocale() . RouteServiceProvider::HOME);
        }catch (\Exception $e ) {
            return back()->withErrors($e->getMessage());
        }


    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validated)) {
            return redirect()->intended('/');
        }
        return back()->withErrors('Неверный логин или пароль');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    public function profile()
    {
        return view('auth.profile');
    }
}
