<?php

namespace Zaizainal\CustomAuth\Http\Requests;

use Zaizainal\CustomAuth\Classes\CustomRegister;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return CustomRegister::validationRules();
    }
}
