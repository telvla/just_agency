<?php

namespace App\Service;
use Illuminate\Http\Request;
use App\Helpers\SenderMessage;
use App\Models\FeedbackModel;
use App\Helpers\ValidatorForm;

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
        if (ValidatorForm::check($request)) {
            FeedbackModel::insert($request); // записываем данные в бд
            $message = new SenderMessage($request); // отправляем сообщение пользователю // отправляем сообщение менеджеру
            $message->send();
            // если не отплавили или валидность не прошла, пишем в лог
        }
    }
}
