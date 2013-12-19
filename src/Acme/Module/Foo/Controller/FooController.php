<?php
/**
 * Controller обратной связи
 * @author Ermin Nikolay <nikolay@ermin.ru>
 * @link http://ermin.ru
 * @link http://siteforever.ru
 */
namespace Acme\Module\Foo\Controller;

use FireTroop\Module\Feedback\Forms\Personal as PersonalForm;
use FireTroop\Module\Feedback\Forms\Organization as OrganizationForm;
use Sfcms;
use Sfcms_Controller;

class FooController extends Sfcms_Controller
{
    public function indexAction()
    {
        return sprintf('Controller "%s"<br>File "%s"', __METHOD__, __FILE__ );
    }
}
