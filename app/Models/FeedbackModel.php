<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
* Description of FeedbackModel
*
* @author trifonov
*/
class FeedbackModel extends Model
{
    /**
     * Запись данных пользователя с формы обратной связи
     *
     * @param Request $request - массив данных пользователя
     * @return void
     */
    public static function insert(Request $request) : void
    {
        //$add_time = time() + (3 * 60 * 60);
        //$date = date("Y-m-d H:i:s", $add_time);
        $date = date("Y-m-d H:i:s");

        DB::table('feedback')->insert([
            'name' => $request->name,
            'email' => $request->mail,
            'phone' => $request->phone,
            'type_service' => $request->type_service,
            'ip_user' => $request->ip(),
            'created' => $date
        ]);
    }
}   
