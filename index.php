<?php
// путь к фреймворку
// если не указан, то в текущей директории
define('SF_PATH', __DIR__.'/vendor/keltanas/site-forever-cms');

//корень сайта
define('ROOT', __DIR__);

// автозагрузка классов
require_once 'vendor/autoload.php';
//require_once SF_PATH . '/class/App.php';

$app = new App( array('application/config.php'));
$app->run();

