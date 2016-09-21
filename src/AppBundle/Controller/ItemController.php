<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ItemController extends Controller
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
        $todos = $em->getRepository('AppBundle:Item')->findAll(array(),array('name' => 'ASC'));

        $todos = $this->get('serializer')->serialize($todos,'json');
        $respose = new Response($todos);
        $respose->headers->set('Content-Type','application/json');

        return $respose;
    }

    //Backend API for save contact Json Object
    /**
     * @Route("/saveItem")
     */
    public function saveContact(Request $request){
        try{
            $data = json_decode($request->getContent(), true);

            $item = new Item();

            $name = $data['name'];
            $state = "NotDone";
            $priority = $data['priority'];

            $item->setName($name);
            $item->setState($state);
            $item->setPriority($priority);
            $item->setDone(null);

            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();

            $this->addFlash(
                'Notice',
                'Contact Added'
            );
            return new JsonResponse(array('data' => $name));
        }catch (Exception $e){

        }
    }

    /**
     * @Route("/deleteItem")
     */
    public function deleteContact(Request $request){
        try{
            $data = json_decode($request->getContent(), true);

            $id = $data['id'];

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Item')->findOneBy(array('id' => $id));

            if ($entity != null){
                $em->remove($entity);
                $em->flush();
            }

            return new JsonResponse(array('data' => "deleted"));
        }catch (Exception $e){

        }

    }



}
