<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
        Создание таблицы "Обратная связь"
        name - имя
        email - почтовый ящик
        phone - телефон
        type_service - тип заявки
        type_site - тип сайта
        view - обработана/просмотренна заявка        
        ip_user - ip пользователя
        created - дата создание завки
    */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->increments('id');
            $table->string('name', 60);
            $table->string('email', 50);
            $table->string('phone', 20);
            $table->string('type_service', 50);
            $table->string('type_site', 50);
            $table->string('view')->default('0');
            $table->string('ip_user', 20);
            $table->timestamp('created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
