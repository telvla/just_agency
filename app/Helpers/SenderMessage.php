<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use Validator;

/**
 * Description of SenderMessage
 *
 * @author trifonov
 */
class SenderMessage
{
    private $request;

    public function __construct(Request $request)
    {
        $this->requst = $request;
        $this->sendManager();
        $this->sendClient();
    }

    public function sendManager()
    {
        Mail::send('manager', [
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'text' => $request->text

            
        ], function ($message) {
            $message->from('no-reply@bioline.ru', 'bioline.ru');
            $message->to('trifonov@bioline.ru', 'bioline.ru')->subject('Обратная связь');
        });
    }

    public function sendClient()
    {

    }
}
