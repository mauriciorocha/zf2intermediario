<?php
/**
 * Created by PhpStorm.
 * User: mauriciorocha
 * Date: 22/02/16
 * Time: 11:05
 */
namespace SONUser\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\Persistence\ObjectManager;

use SONUser\Entity\User;

class LoadUser extends AbstractFixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setNome('Maurício Santos da Rocha')
            ->setEmail('mauricio.santosrocha@gmail.com')
            ->setPassword(123456)
            ->setActive(true);

        $manager->persist($user);
        $manager->flush();
    }
}