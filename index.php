<?php
/**
 * Version @version@
 * This is enter point to SiteForeverCMS
 */

//корень сайта
define('ROOT', __DIR__);

// автозагрузка классов
require_once 'vendor/autoload.php';

$app = new App('prod', false);
$app->run();
