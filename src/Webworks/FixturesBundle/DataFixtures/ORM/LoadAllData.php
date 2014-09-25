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

namespace Webworks\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Webworks\FixturesBundle\DataFixtures\ORM\LoaderClasses\Modules;
use Webworks\FixturesBundle\DataFixtures\ORM\LoaderClasses\Users;
use Webworks\UserBundle\Entity\User;

class LoadAllData implements FixtureInterface {

    public function load(ObjectManager $manager) {
        // Loads the users for the test/development environment
        $users = Users::load($manager);
        // Loads the modules
        $modules = Modules::load($manager);
    }
}
