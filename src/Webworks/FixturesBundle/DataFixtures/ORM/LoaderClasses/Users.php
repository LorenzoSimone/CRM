<?php

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
