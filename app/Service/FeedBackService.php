<?php

namespace App\Service;
use Illuminate\Http\Request;

/**
 * Description of FeedBackService
 *
 * @author trifonov
 */
class FeedBackService
{
    /**
    * Проверка формы обратной связи на валидность
    * @param Request $request - массив данных пользователя
    * @return bool
    */
    public function boot(Request $request)
    {
        //\App\Models\FeedbackModel::insert($request);
        // проверяем валидность
        // записываем данные в бд
        // отправляем сообщение менеджеру
        // отправляем сообщение пользователю
        // если не отплавили или валидность не прошла, пишем в лог
    }
}
