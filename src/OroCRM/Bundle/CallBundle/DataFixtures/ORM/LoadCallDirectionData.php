<?php

namespace OroCRM\Bundle\CallBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use OroCRM\Bundle\CallBundle\Entity\CallDirection;

class LoadCallDirectionData extends AbstractFixture
{
    /**
     * @var array
     */
    protected $data = array(
        'incoming',
        'outgoing',
    );

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->data as $direction) {
            $callDirection = new CallDirection();
            $callDirection->setDirection($direction);
            $manager->persist($callDirection);
        }

        $manager->flush();
    }
}
