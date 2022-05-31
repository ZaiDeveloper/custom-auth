<?php

namespace Zaizainal\CustomAuth\Http\Controllers;

use Zaizainal\CustomAuth\Classes\CustomLogin;
use Zaizainal\CustomAuth\Http\Requests\LoginRequest;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    protected $customLogin;

    public function __construct(CustomLogin $customLogin)
    {
        $this->customLogin = $customLogin;
    }

    public function show()
    {
        return $this->customLogin->showLoginView();
    }

    public function login(LoginRequest $request)
    {
        return $this->customLogin->loginUser($request);
    }

    public function logout()
    {
        return $this->customLogin->logoutUser();
    }
}
