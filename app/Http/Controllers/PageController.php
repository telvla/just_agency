<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Helpers\ValidatorForm;

/**
 * Description of PageController
 *
 * @author trifonov
 */
class PageController extends Controller {

    public function index() : object
    {
        
        return view('welcome');
    }

    public function send(Request $request) : string
    {
        

        // проверяем валидность
        // записываем данные в бд
        // отправляем сообщение менеджеру
        // отправляем сообщение пользователю
        // если не отплавили или валидность не прошла, пишем в лог

        return 'send';
    }
}