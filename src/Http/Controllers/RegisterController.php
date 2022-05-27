<?php

namespace Zaizainal\CustomAuth\Http\Controllers;

use Zaizainal\CustomAuth\Classes\CustomRegister;
use Zaizainal\CustomAuth\Http\Requests\RegisterRequest;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    protected $customRegister;

    public function __construct(CustomRegister $customRegister)
    {
        $this->customRegister = $customRegister;
    }

    public function create()
    {
        return $this->customRegister->showRegisterView();
    }

    public function store(RegisterRequest $request)
    {
        return $this->customRegister->createNewUser($request);
    }
}
