<?php

namespace GiantBomb\MobileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GiantBombMobileBundle:Default:index.html.twig', array('name' => $name));
    }
}
