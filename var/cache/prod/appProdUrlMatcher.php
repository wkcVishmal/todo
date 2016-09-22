<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ItemController::indexAction',  '_route' => 'homepage',);
        }

        // app_item_tododata
        if ($pathinfo === '/listdata') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_app_item_tododata;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ItemController::todoData',  '_route' => 'app_item_tododata',);
        }
        not_app_item_tododata:

        // app_item_savecontact
        if ($pathinfo === '/saveItem') {
            return array (  '_controller' => 'AppBundle\\Controller\\ItemController::saveContact',  '_route' => 'app_item_savecontact',);
        }

        // app_item_deletecontact
        if ($pathinfo === '/deleteItem') {
            return array (  '_controller' => 'AppBundle\\Controller\\ItemController::deleteContact',  '_route' => 'app_item_deletecontact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
