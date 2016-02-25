<?php
/**
 * Created by PhpStorm.
 * User: mauriciorocha
 * Date: 22/02/16
 * Time: 08:59
 */

namespace SONUser\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function registerAction()
    {
        return new ViewModel();
    }
}