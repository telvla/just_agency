<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use Mail;

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
    }

    public function send()
    {
        $this->manager();
        $this->client();
    } 

    public function manager()
    {
        Mail::send('manager', [
            'name' => $this->request->name,
            'email' => $this->request->mail,
            'phone' => $this->request->phone,
            'type_service' => $this->request->type_service
        ], function ($message) {
            $message->from('no-reply@bioline.ru', 'bioline.ru');
            $message->to('trifonov@bioline.ru', 'bioline.ru')->subject('Заявка с сайта');
        });
    }

    public function client()
    {
        Mail::send('client', [], function ($message) {
            $message->from('no-reply@bioline.ru', 'bioline.ru');
            $message->to('trifonov@bioline.ru', 'bioline.ru')->subject('Заявка на сайте');
        });
    }
}
