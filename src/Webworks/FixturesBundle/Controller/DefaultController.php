<?php

namespace Webworks\FixturesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WebworksFixturesBundle:Default:index.html.twig', array('name' => $name));
    }
}
