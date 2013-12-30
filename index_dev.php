<?php
/**
 * Version @version@
 * This is enter point to SiteForeverCMS
 */

// This check prevents access to debug front controllers that are deployed by accident to production servers.
// Feel free to remove this, extend it, or make something more sophisticated.
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'fe80::1', '::1'))
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

//корень сайта
define('ROOT', __DIR__);

// автозагрузка классов
require_once 'vendor/autoload.php';

$app = new App('dev', true);
$app->run();
