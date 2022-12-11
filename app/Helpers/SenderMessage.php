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
            'name' => $this->request['array_form_input']['name'],
            'email' => $this->request['array_form_input']['mail'],
            'phone' => $this->request['array_form_input']['phone'],
            'select_type_service' => $this->request['array_form_input']['select-type-service'],
            'type_site' => $this->request['array_form_input']['type-site']
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
