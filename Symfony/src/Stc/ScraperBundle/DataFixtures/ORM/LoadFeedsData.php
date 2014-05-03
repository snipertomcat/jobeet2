<?php

namespace Stc\ScraperBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Stc\ScraperBundle\Entity\Feeds;

class LoadFeedData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $famousDead = new Feeds();
        $famousDead->setName("FamousDead");
        $famousDead->setUrl("http://feeds.feedburner.com/FamousDeadDB?format=xml");
        $famousDead->setIsActive(1);
        $famousDead->setEntityId(1);
        $famousDead->setCreatedAt(new \DateTime('now'));
        $famousDead->setUpdatedAt(new \DateTime('now'));

        $em->persist($famousDead);
        $em->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}