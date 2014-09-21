<?php

namespace Webworks\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

        $params = array(

        );
        return $this->render('WebworksAdminBundle:Default:index.html.twig',$params);
    }
}
