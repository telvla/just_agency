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
    public function boot() //: bool
    {
        var_dump($this->request);

        /*
        if (ValidatorForm::check($request) && $request->session()->token() == $request['array_form_input']['token']) {
            FeedbackModel::insert($request);
            $message = new SenderMessage($request);
            $message->send();

            return true;
        }

        return false;
        */
    }
}
