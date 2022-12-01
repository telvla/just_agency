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
    * Boot service
    * @param Request $request - user data array
    * @return bool
    */
    public function boot(Request $request) : bool
    {
        if (ValidatorForm::check($request)) {
            FeedbackModel::insert($request);
            $message = new SenderMessage($request);
            $message->send();

            return true;
        }

        return false;
    }
}
