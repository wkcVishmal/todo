<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('todo/home.html.twig');
    }

    /**
     * @Route("/listdata")
     * @Method("GET")
     */
    public function todoData(){
        $em = $this->getDoctrine()->getManager();
        $contacts = $em->getRepository('AppBundle:Todo')->findAll();

        $contacts = $this->get('serializer')->serialize($contacts,'json');
        $respose = new Response($contacts);
        $respose->headers->set('Content-Type','application/json');
        return $respose;
    }


}
