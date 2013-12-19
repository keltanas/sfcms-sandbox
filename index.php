<?php
/**
 * Version @version@
 * Точка входа для SiteForeverCMS
 * Этот файл вызывает сервер при запросах
 */

//корень сайта
define('ROOT', __DIR__);

// автозагрузка классов
require_once 'vendor/autoload.php';

$app = new App('app/cfg/base.php', true);
$app->run();
