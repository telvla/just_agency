<?php

namespace App\Service;
use Illuminate\Http\Request;
use App\Helpers\SenderMessage;
use App\Models\FeedbackModel;

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
        // проверяем валидность
        
        FeedbackModel::insert($request); // записываем данные в бд
        new SenderMessage($request); // отправляем сообщение пользователю // отправляем сообщение менеджеру

        // если не отплавили или валидность не прошла, пишем в лог
    }
}
