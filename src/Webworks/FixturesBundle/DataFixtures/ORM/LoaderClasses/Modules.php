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

namespace Webworks\FixturesBundle\DataFixtures\ORM\LoaderClasses;

use Doctrine\Common\Persistence\ObjectManager;
use Webworks\AdminBundle\Entity\SystemModule;

class Modules {

    public static function load(ObjectManager $manager) {
        print "    > loading the modules\n\r";

        $modules = array();

        $adminMod = new SystemModule();
        $adminMod->setActive(1);
        $adminMod->setDescription('This module is required for module-management, system configuration and core administration features.');
        $adminMod->setRequired(true);
        $adminMod->setName('Administration module');
        $adminMod->setMenuItemText('Administration');
        $adminMod->setDeveloperName('Webworks Nürnberg');
        $adminMod->setDeveloperUrl('http://www.webworks-nuernberg.de');
        $adminMod->setMenuOrder(1);
        $adminMod->setSystemMainRoute('webworks_admin_index');
        $adminMod->setShowInMenu(true);

        $frontendMod = new SystemModule();
        $frontendMod->setActive(1);
        $frontendMod->setDescription('Basic frontend module. Required.');
        $frontendMod->setRequired(true);
        $frontendMod->setName('Frontend module');
        $frontendMod->setMenuItemText('');
        $frontendMod->setDeveloperName('Webworks Nürnberg');
        $frontendMod->setDeveloperUrl('http://www.webworks-nuernberg.de');
        $frontendMod->setMenuOrder(2);
        $frontendMod->setShowInMenu(false);
        $frontendMod->setSystemMainRoute('');

        $modules['admin'] = $adminMod;
        $modules['frontend'] = $frontendMod;

        foreach ($modules as $mod) {
            $manager->persist($mod);
        }
        $manager->flush();

        return $modules;
    }
} 