<?php

namespace Zaizainal\CustomAuth\Http\Requests;

use Zaizainal\CustomAuth\Classes\CustomLogin;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return CustomLogin::validationRules();
    }
}
