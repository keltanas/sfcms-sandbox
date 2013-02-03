<?php
return array(

    // отладка
    'debug' => array(
        'profiler'   => true,
    ),

    'cache' => false,

    'logger'    => 'auto',
    //    'logger'    => 'html',
    //    'logger'    => 'file',

    'sitename'  => 'SFCMS Sandbox',
    'siteurl'   => 'http://'.$_SERVER['HTTP_HOST'],
    'admin'     => 'admin@exapmle.com',

    'url'       => array(
        'rewrite'   => true,
    ),

    //    'editor' => 'tinymce',
    'editor' => 'ckeditor',
    //    'editor' => 'elrte',

    'language'  => 'ru',

    // база данных
    'db' => array(
        'login'     => 'siteforever',
        'password'  => 'siteforever',
        'host'      => 'localhost',
        'database'  => 'siteforever',
        'debug'     => true,
        'migration' => true,
        //'autoGenerateMeta' => true,
    ),

    // тема
    'template' => array(
        'theme'     => 'sandbox',
        // драйвер шаблонизатора
        // это класс, поддерживающий интерфейс TPL_Driver
        'driver'    => '\\Sfcms\\Tpl\\Smarty',
        'widgets'   => SF_PATH.DIRECTORY_SEPARATOR.'widgets',
        'ext'       => 'tpl', // расширение шаблонов
        'admin'     => SF_PATH.DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR.'system', // каталог шаблонов админки
        '404'       => 'error404', // шаблон страницы 404
    ),

    // настройки пользователей
    'users' => array(
        'userdir' => DIRECTORY_SEPARATOR.'files',
    ),
);