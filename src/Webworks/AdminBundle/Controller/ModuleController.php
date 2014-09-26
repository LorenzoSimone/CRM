<?php

/*
    Copyright (C) 2014 Anton Dachauer (kontakt@webworks-nuernberg.de)

    Dieses Programm ist freie Software. Sie können es unter den
    Bedingungen der GNU General Public License, wie von der Free Software
    Foundation veröffentlicht, weitergeben und/oder modifizieren, entweder
    gemäß Version 2 der Lizenz oder (nach Ihrer Option) jeder späteren
    Version.

    Die Veröffentlichung dieses Programms erfolgt in der Hoffnung, dass es
    Ihnen von Nutzen sein wird, aber OHNE IRGENDEINE GARANTIE, sogar ohne
    die implizite Garantie der MARKTREIFE oder der VERWENDBARKEIT FÜR
    EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public
    License.

    Sie sollten ein Exemplar der GNU General Public License zusammen mit
    diesem Programm erhalten haben. Falls nicht, schreiben Sie an die Free
    Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA
    02110, USA.
*/

namespace Webworks\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Webworks\AdminBundle\Form\SystemModuleType;

class ModuleController extends Controller {

    public function indexAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository('WebworksAdminBundle:SystemModule');
        $query = $repository->createQueryBuilder('m')
            ->getQuery();
        $modules = $query->getResult();

        $params = array(
            'modules'           => $modules,
        );
        return $this->render('WebworksAdminBundle:Modules:index.html.twig', $params);
    }

    public function editAction(Request $request, $id) {
        $module = $this->getDoctrine()->getRepository('WebworksAdminBundle:SystemModule')->find($id);

        $form = $this->createForm(new SystemModuleType(), $module);

        $params = array(
            'form'              => $form->createView(),
            'module'            => $module,
        );
        return $this->render('WebworksAdminBundle:Modules:edit.html.twig', $params);
    }
}
