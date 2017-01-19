<?php

namespace AppBundle\DataFixtures\ORM;
use AppBundle\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadUserData
 *
 * @author diana
 */
class LoadUserData implements FixtureInterface {

    
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 500; $i++) {
            $post = new Post();
            $post->setTitle();
        }
    }

}
