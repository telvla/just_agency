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
     * Проверка формы обратной связи с лендинга на валидность
     * @param Request $request - массив данных пользователя
     * @return bool
     */
    public static function landingPage(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'mail' => 'required|email|max:40',
            'phone' => 'required|string|max:30',
            'text' => 'required|string|max:600',
        ]);
    }
}
