<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator as LaravelValidator;
 
class Validator extends LaravelValidator {
 
    public function validateisCurrentPassword($attribute, $value, $parameters)
    {
        return Hash::check($value, Auth::user()->password);
    }
 
}