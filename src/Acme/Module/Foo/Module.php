<?php
/**
 * Модуль обратной связи
 * @author Nikolay Ermin <nikolay@ermin.ru>
 * @link   http://siteforever.ru
 */

namespace Acme\Module\Foo;

use Sfcms\Module as SfModule;

class Module extends SfModule
{
    /**
     * Должна вернуть массив конфига для модуля
     * @return mixed
     */
    public function config()
    {
        return array(
            'controllers' => array(
                'foo'  => array(),
            ),
            'models'      => array(
            ),
        );
    }

}