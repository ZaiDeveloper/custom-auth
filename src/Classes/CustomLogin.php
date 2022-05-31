<?php

namespace Zaizainal\CustomAuth\Classes;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomLogin
{
    public static $customValidationRules;
    public static $customLoginView;

    public static function customValidationRules(array $rules)
    {
        static::$customValidationRules = $rules;
    }

    public static function validationRules(): array
    {
        return static::$customValidationRules
            ? static::$customValidationRules
            : [
                'email' => 'required',
                'password' => 'required'
            ];
    }

    public static function customRegisterView(callable $callback)
    {
        static::$customLoginView = $callback;
    }

    public function showLoginView()
    {
        return static::$customLoginView
            ? call_user_func(static::$customLoginView)
            : view('custom-auth::login');
    }

    public function loginUser($request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->route('login');
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect()->route('show.login');
    }
}
