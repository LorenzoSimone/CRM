<?php

namespace Webworks\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

        $params = array(

        );
        return $this->render('WebworksClientBundle:Default:index.html.twig', $params);
    }
}
