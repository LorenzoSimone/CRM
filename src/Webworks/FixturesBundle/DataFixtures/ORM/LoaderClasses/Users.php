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
use Webworks\UserBundle\Entity\User;

class Users {

    public static function load(ObjectManager $manager) {
        $users = array();

        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setEmail('admin@testcrm.de');
        $userAdmin->setPlainPassword('admin');
        $userAdmin->setEnabled(true);
        $userAdmin->addRole('ROLE_ADMIN');

        $userTest = new User();
        $userTest->setUsername('test');
        $userTest->setEmail('test@testcrm.de');
        $userTest->setPlainPassword('test');
        $userTest->setEnabled(true);
        $userTest->addRole('ROLE_USER');

        $manager->persist($userAdmin);
        $manager->persist($userTest);
        $manager->flush();
        $users['admin'] = $userAdmin;
        $users['test'] = $userTest;

        return $users;
    }
}
