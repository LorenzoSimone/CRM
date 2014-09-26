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

namespace Webworks\FrontendBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav navbar-nav'));

        $doctrine = $this->container->get('doctrine');

        $repository = $doctrine->getRepository('WebworksAdminBundle:SystemModule');
        $query = $repository->createQueryBuilder('m')
            ->orderBy('m.menuOrder', 'ASC')
            ->where('m.required = 1 OR m.active = 1')
            ->andWhere('m.showInMenu = 1')
            ->getQuery();
        $modules = $query->getResult();

        foreach ($modules as $module) {
            $menu->addChild($module->getMenuItemText(), array('route' => $module->getSystemMainRoute()));
        }

        return $menu;
    }
} 