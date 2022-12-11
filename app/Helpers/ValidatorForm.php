<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use Validator;

/**
 * Description of ValidatorForm
 *
 * @author trifonov
 */
class ValidatorForm
{
    /**
    * Checking the feedback form
    * @param Request $request - user data array
    * @return bool
    */
    public static function check(Request $request) : bool
    {
        return Validator::make($request['array_form_input']->all(), [
            'name' => 'required|string|max:60',
            'email' => 'required|email|max:50',
            'phone' => 'required|string|max:20',
            'type_service' => 'string|max:20'
        ]);
    }
}
