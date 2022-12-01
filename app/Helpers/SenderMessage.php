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
    /*
    * user data array
    */
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

    /**
    * Send message manager
    * @return void
    */
    public function manager() : void
    {
        Mail::send('manager', [
            'name' => $this->request->name,
            'email' => $this->request->mail,
            'phone' => $this->request->phone,
            'type_service' => $this->request->type_service
        ], function ($message) {
            $message->from('no-reply@bioline.ru', 'bioline.ru');
            $message->to('trifonov@bioline.ru', 'bioline.ru')->subject('Заявка с сайта Just Agency');
        });
    }

    /**
    * Send message client
    * @return void
    */    
    public function client() : void
    {
        Mail::send('client', [], function ($message) {
            $message->from('no-reply@bioline.ru', 'bioline.ru');
            $message->to('trifonov@bioline.ru', 'bioline.ru')->subject('Заявка на сайте Just Agency');
        });
    }
}
