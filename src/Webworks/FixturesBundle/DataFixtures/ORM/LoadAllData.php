<?php

namespace Webworks\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Webworks\FixturesBundle\DataFixtures\ORM\LoaderClasses\Users;
use Webworks\UserBundle\Entity\User;

class LoadAllData implements FixtureInterface {

    public function load(ObjectManager $manager) {
        $users = Users::load($manager);
    }
}
