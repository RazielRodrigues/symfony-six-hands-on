<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $microPost1 = new MicroPost();
        $microPost1->setTitle('TEST');
        $microPost1->setText('UHULL');
        $microPost1->setCreated(new DateTime());
        $manager->persist($microPost1);

        $manager->flush();
    }
}
