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
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
    * Boot service
    * @param Request $request - user data array
    * @return bool
    */
    public function boot() : bool
    {
        if (ValidatorForm::check($this->request) && $this->request->session()->token() == $this->request['array_form_input']['token']) {
            FeedbackModel::insert($this->request);
            $message = new SenderMessage($this->request);
            $message->send();

            return true;
        }

        return false;
    }
}
