<?php

namespace MiVendor\MiModuloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MiVendorMiModuloBundle:Default:index.html.twig', array('name' => $name));
    }
}
