<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

/**
 * Description of LoadUserData
 *
 * @author diana
 */
class LoadUserData implements FixtureInterface {

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for($i = 0; $i < 500; $i++) {
            $post = new Post();
            $post->setTitle($faker->sentence(4));
            $post->setLead($faker->text(300));
            $post->setContent($faker->text(700));
            $post->setCreatedAt($faker->dateTimeThisMonth);

            $manager->persist($post);
        }

        $manager->flush();
    }

}
