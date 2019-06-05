<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Зарегистрировать автозагрузчик
|--------------------------------------------------------------------------
|
| Composer предоставляет удобный, автоматически сгенерированный загрузчик классов для
| наше приложение. Нам просто нужно использовать это! Мы просто потребуем это
| в сценарий здесь, так что нам не нужно беспокоиться о ручном
| загрузка любого из наших классов позже. Это здорово, чтобы расслабиться.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Включить свет
|--------------------------------------------------------------------------
|
| Нам нужно осветить разработку PHP, поэтому давайте включим свет.
| Это загружает фреймворк и готовит его к использованию, затем
| загрузит это приложение, чтобы мы могли запустить его и отправить
| ответы обратно в браузер и радуют наших пользователей.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Запустите приложение
|--------------------------------------------------------------------------
|
| Как только у нас есть приложение, мы можем обработать входящий запрос
| через ядро ​​и отправьте соответствующий ответ обратно
| браузер клиента, позволяющий им наслаждаться креативом
| и замечательное приложение, которое мы подготовили для них.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
