<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    public function __construct(private UserPasswordHasherInterface $userPasswordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {

        $user = new User();
        $user->setEmail('rz@night.com');
        $user->setPassword($this->userPasswordHasher->hashPassword($user, '12345678'));
        $manager->persist($user);

        $microPost1 = new MicroPost();
        $microPost1->setTitle('TEST');
        $microPost1->setText('UHULL');
        $microPost1->setCreated(new DateTime());
        $manager->persist($microPost1);

        $manager->flush();
    }
}
