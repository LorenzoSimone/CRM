<?php

namespace Webworks\ClientBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav', 'currentClass' => 'active'));

        $menu->addChild('menu.item.all', array('route' => 'webworks_client_index'));

        return $menu;
    }
} 