<?php

namespace Webworks\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

        $params = array(

        );
        return $this->render('WebworksDashboardBundle:Default:index.html.twig', $params);
    }
}
