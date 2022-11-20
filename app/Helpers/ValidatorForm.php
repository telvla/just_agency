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
     * Проверка формы обратной связи на валидность
     * @param Request $request - массив данных пользователя
     * @return bool
     */
    public static function check(Request $request) : bool
    {
        return Validator::make($request->all(), [
            'name' => 'required|string|max:60',
            'email' => 'required|email|max:50',
            'phone' => 'required|string|max:20',
            'type_service' => 'string|max:20'
        ]);
    }
}
