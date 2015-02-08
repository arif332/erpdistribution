<?php

namespace ERP\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ERPAccountBundle:Default:index.html.twig', array('name' => $name));
    }
}
