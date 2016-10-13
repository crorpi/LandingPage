<?php

namespace pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pruebaBundle:Default:index.html.twig');
    }

    public function productoAction($tipo)
    {

        return $this->render('pruebaBundle:Default:producto.html.twig', array('tipo'=>$tipo));

    }

}
